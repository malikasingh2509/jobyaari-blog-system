@extends('layouts.frontend')

@section('content')

<div class="hero">

    <div class="container">

        <h1>

            {{ $blog->title }}

        </h1>

        <p>

            Blog Details & Latest Updates

        </p>

    </div>

</div>

<div class="container py-5">

    <div class="row">

        <div class="col-lg-8">

            <div class="sidebar-box">

                @if($blog->image)

                <img src="{{ $blog->image }}"
                     class="img-fluid rounded-4 mb-4"
                     style="width:100%; max-height:450px; object-fit:cover;">

                @endif

                <span class="category-btn mb-3 d-inline-block">

                    {{ $blog->category }}

                </span>

                <h2 class="fw-bold mb-3">

                    {{ $blog->title }}

                </h2>

                <p class="text-muted mb-4">

                    Posted on:
                    {{ $blog->created_at->format('d M Y, h:i A') }}

                </p>

                <p class="lead mb-4">

                    {{ $blog->short_description }}

                </p>

                <div style="line-height:2; font-size:17px;">

                    {!! $blog->content !!}

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="sidebar-box">

                <h5 class="fw-bold mb-4">

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

                <a href="{{ route('frontend.category', $category) }}"
                   class="category-btn">

                    {{ $category }}

                </a>

                @endforeach

            </div>

            <div class="sidebar-box">

                <h5 class="fw-bold mb-4">

                    Recent Blogs

                </h5>

                @foreach($recentBlogs as $recent)

                <div class="d-flex mb-4">

                    @if($recent->image)

                    <img src="{{ $blog->image }}"
                         width="90"
                         height="70"
                         style="object-fit:cover; border-radius:12px;">

                    @endif

                    <div class="ms-3">

                        <a href="{{ route('frontend.blog.show', $recent->id) }}"
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