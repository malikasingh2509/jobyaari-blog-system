@extends('layouts.frontend')

@section('content')

<div class="hero">

    <div class="container">

        <h1>

            Latest Jobs & Career Updates

        </h1>

        <p>

            Get latest jobs, results, admit cards and placements instantly

        </p>

    </div>

</div>

<div class="container py-5">

    <div class="row">

        <div class="col-lg-8">
            @if($blogs->count()==0)

                <div class="sidebar-box text-center p-5">

                    <h4>

                        No Blogs Found

                    </h4>

                </div>

                @endif

            @foreach($blogs as $blog)

            <div class="blog-card mb-4">

                @if($blog->image)

                <img src="{{ $blog->image }}"
                     alt="blog image">

                @endif

                <div class="blog-content">

                    <span class="category-btn mb-3 d-inline-block">

                        {{ $blog->category }}

                    </span>

                    <h4>

                        {{ $blog->title }}

                    </h4>

                    <p class="text-muted mb-3">

                        {{ $blog->created_at->format('d M Y, h:i A') }}

                    </p>

                    <p class="mb-4">

                        {{ Str::limit($blog->short_description, 150) }}

                    </p>

                    <a href="{{ route('frontend.blog.show', $blog->id)}}"
                       class="btn btn-primary">

                        Read Full Article →

                    </a>

                </div>

            </div>

            @endforeach

        </div>

        <div class="col-lg-4">

            <div class="sidebar-box">

                <h5>

                    Categories

                </h5>

                @php

                $categories = [
                    'Jobs',
                    'Result',
                    'Admit Card',
                    'Placement'
                ];

                @endphp

                @foreach($categories as $category)

                <a href="{{ url('/category/'.$category) }}"
                   class="category-btn">

                    {{ $category }}

                </a>

                @endforeach

            </div>

            <div class="sidebar-box">

                <h5>

                    Recent Blogs

                </h5>

                @foreach($recentBlogs as $recent)

                <div class="d-flex mb-4">

                    @if($recent->image)

                    <img src="{{ $recent->image  }}"
                         width="90"
                         height="70"
                         style="object-fit:cover; border-radius:12px;">

                    @endif

                    <div class="ms-3">

                        <a href="{{ route('frontend.blog.show', $recent->id)}}"
                           class="text-dark text-decoration-none fw-semibold">

                            {{ Str::limit($recent->title, 45) }}

                        </a>

                        <div class="text-muted small mt-1">

                            {{ $recent->created_at->format('d M Y') }}

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection