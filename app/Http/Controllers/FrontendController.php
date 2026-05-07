<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function home()
    {
        $blogs = Blog::latest()->get();

        $recentBlogs = Blog::latest()->take(5)->get();

        return view('frontend.home', compact('blogs', 'recentBlogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        $recentBlogs = Blog::latest()->take(5)->get();

        return view('frontend.show', compact('blog', 'recentBlogs'));
    }
    public function category($category)
{
    $blogs = Blog::where('category', $category)
                 ->latest()
                 ->get();

    $recentBlogs = Blog::latest()->take(5)->get();

    return view('frontend.home',
        compact('blogs', 'recentBlogs'));
}
public function search(Request $request)
{
    $search = $request->search;

    $blogs = Blog::where('title', 'LIKE', "%$search%")
                ->orWhere('category', 'LIKE', "%$search%")
                ->latest()
                ->get();

    $recentBlogs = Blog::latest()->take(5)->get();

    return view('frontend.home', compact('blogs', 'recentBlogs'));
}
public function about()
{
    return view('frontend.about');
}

public function contact()
{
    return view('frontend.contact');
}
}