<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        $totalBlogs = Blog::count();

        $totalCategories = Blog::distinct()
                                ->count('category');

        $latestBlog = Blog::latest()->first();

        return view(
            'blogs.index',
            compact(
                'blogs',
                'totalBlogs',
                'totalCategories',
                'latestBlog'
            )
        );
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $destinationPath = public_path('images');

            // Create folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                $destinationPath,
                $imageName
            );
        }

        Blog::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $imageName
        ]);

        return redirect('/blogs');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $imageName = $blog->image;

        if ($request->hasFile('image')) {

            $destinationPath = public_path('images');

            // Create folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                $destinationPath,
                $imageName
            );
        }

        $blog->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'category' => $request->category,
            'image' => $imageName
        ]);

        return redirect('/blogs');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/blogs');
    }

    public function filter(Request $request)
    {
        $blogs = Blog::query();

        // SEARCH
        if ($request->search) {
            $blogs->where(
                'title',
                'like',
                '%' . $request->search . '%'
            );
        }

        // CATEGORY
        if ($request->category) {
            $blogs->where(
                'category',
                $request->category
            );
        }

        // DATE
        if ($request->date) {
            $blogs->whereDate(
                'created_at',
                $request->date
            );
        }

        $blogs = $blogs->latest()->get();

        $output = '';

        foreach ($blogs as $blog)
        {
            $output .= '

            <div class="col-md-4 mb-4">

                <div class="card h-100 shadow-sm">';

            if ($blog->image)
            {
                $output .= '

                    <img src="/images/' . $blog->image . '"
                         class="card-img-top"
                         height="200"
                         style="object-fit:cover;">';
            }

            $output .= '

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        ' . $blog->title . '
                    </h5>

                    <p class="card-text">
                        ' . $blog->short_description . '
                    </p>

                    <p>
                        <strong>Category:</strong>
                        ' . $blog->category . '
                    </p>

                    <p class="text-muted small">
                        Posted on:
                        ' . $blog->created_at->format('d M Y, h:i A') . '
                    </p>

                    <div class="mt-auto">

                        <a href="/blogs/' . $blog->id . '"
                           class="btn btn-primary btn-sm">
                           View
                        </a>

                        <a href="/blogs/' . $blog->id . '/edit"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <form action="/blogs/' . $blog->id . '"
                              method="POST"
                              style="display:inline;">

                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>';
        }

        return $output;
    }
}