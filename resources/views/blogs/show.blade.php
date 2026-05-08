<!DOCTYPE html>
<html>
<head>
    <title>{{ $blog->title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/blogs">
            Admin Panel
        </a>

        <div>

            <a href="/"
               class="text-white text-decoration-none me-3">
                Home
            </a>

            <a href="/blogs/create"
               class="text-white text-decoration-none me-3">
                Add Blog
            </a>

            <a href="/about"
               class="text-white text-decoration-none me-3">
                About
            </a>

            <a href="/contact"
               class="text-white text-decoration-none">
                Contact
            </a>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <a href="/blogs" class="btn btn-secondary mb-4">
        Back
    </a>

    <div class="card">

        @if($blog->image)
            <img src="{{ asset('images/' . $blog->image) }}"
                 class="card-img-top"
                 height="400"
                 style="object-fit:cover;">
        @endif

        <div class="card-body">

            <h1>{{ $blog->title }}</h1>

            <p class="mt-3">
                <strong>Category:</strong>
                {{ $blog->category }}
            </p>
            <p class="text-muted">
                Posted on:
                {{ $blog->created_at->format('d M Y, h:i A') }}
            </p>

            <p>
                {!! $blog->content !!}
            </p>

        </div>

    </div>

</div>


</body>
</html>