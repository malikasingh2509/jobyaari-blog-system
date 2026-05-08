<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>

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

    <h2>Edit Blog</h2>

    <form action="{{ route('blogs.update', $blog->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>

            <input type="text"
                   name="title"
                   value="{{ $blog->title }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Short Description</label>

            <textarea name="short_description"
                      class="form-control">{{ $blog->short_description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Content</label>

            <textarea name="content"
                      class="form-control">{{!! $blog->content !!}}</textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>

            <input type="text"
                   name="category"
                   value="{{ $blog->category }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>

            <input type="file"
                   name="image"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Update Blog
        </button>

    </form>

</div>

</body>
</html>