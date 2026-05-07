<!DOCTYPE html>
<html>

<head>

    <title>Add Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#eef2f7;
            font-family:Arial;
        }

        .sidebar{
            width:260px;
            height:100vh;
            background:linear-gradient(180deg,#111827,#1e293b);
            position:fixed;
            left:0;
            top:0;
            padding-top:20px;
            color:white;
            box-shadow:5px 0 20px rgba(0,0,0,0.1);
        }

        .logo{
            text-align:center;
            font-size:28px;
            font-weight:bold;
            margin-bottom:40px;
            color:#60a5fa;
        }

        .sidebar a{
            display:block;
            color:#d1d5db;
            text-decoration:none;
            padding:15px 30px;
            transition:0.3s;
            font-size:16px;
        }

        .sidebar a:hover{
            background:#2563eb;
            color:white;
            padding-left:40px;
        }

        .main{
            margin-left:260px;
            padding:35px;
        }

        .topbar{
            background:white;
            border-radius:15px;
            padding:20px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
            box-shadow:0 5px 20px rgba(0,0,0,0.06);
        }

        .topbar h2{
            font-weight:bold;
        }

        .profile{
            width:45px;
            height:45px;
            border-radius:50%;
            background:#2563eb;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight:bold;
        }

        .form-card{
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .form-title{
            font-size:28px;
            font-weight:bold;
            margin-bottom:30px;
        }

        label{
            font-weight:600;
            margin-bottom:10px;
        }

        .form-control{
            height:50px;
            border-radius:12px;
            border:1px solid #d1d5db;
        }

        textarea.form-control{
            min-height:150px;
        }

        .upload-box{
            border:2px dashed #cbd5e1;
            border-radius:15px;
            padding:40px;
            text-align:center;
            background:#f8fafc;
            transition:0.3s;
        }

        .upload-box:hover{
            background:#eff6ff;
            border-color:#2563eb;
        }

        .publish-btn{
            background:#2563eb;
            border:none;
            padding:14px 35px;
            border-radius:12px;
            color:white;
            font-size:18px;
            font-weight:bold;
            transition:0.3s;
        }

        .publish-btn:hover{
            background:#1d4ed8;
            transform:translateY(-2px);
        }

        .stats{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-bottom:30px;
        }

        .stat-box p{
            color:gray;
            margin-top:5px;
        }

    </style>

</head>

<body>

<div class="sidebar">

    <div class="logo">

        JobYaari

    </div>

    <a href="/blogs">

        📄 Manage Blogs

    </a>

    <a href="/blogs/create">

        ➕ Add Blog

    </a>

    <a href="/">

        🌐 Visit Website

    </a>

    <a href="/about">

        ℹ️ About

    </a>

    <a href="/contact">

        📞 Contact

    </a>

</div>

<div class="main">

    <div class="topbar">

        <h2>

            Blog Management Dashboard

        </h2>

        <div class="profile-circle">
                👩🏻‍💻
        </div>

    </div>

    <div class="form-card">

        <div class="form-title">

            Create New Blog

        </div>

        <form action="{{ route('blogs.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-8 mb-4">

                    <label>

                        Blog Title

                    </label>

                    <input type="text"
                           name="title"
                           class="form-control"
                           placeholder="Enter blog title"
                           required>

                </div>

                <div class="col-md-4 mb-4">

                    <label>

                        Category

                    </label>

                    <select name="category"
                            class="form-control">

                        <option value="Placement">Placement</option>

                        <option value="Result">Result</option>

                        <option value="Admit Card">Admit Card</option>

                        <option value="Jobs">Jobs</option>

                    </select>

                </div>

            </div>

            <div class="mb-4">

                <label>

                    Short Description

                </label>

                <textarea name="short_description"
                          class="form-control"
                          placeholder="Write short description"
                          required></textarea>

            </div>

            <div class="mb-4">

                <label>

                    Upload Thumbnail

                </label>

                <div class="upload-box">

                    <input type="file"
                           name="image"
                           class="form-control"
                           required>

                </div>

            </div>

            <div class="mb-4">

                <label>

                    Blog Content

                </label>

                <textarea name="content"
                          id="content"
                          required></textarea>

            </div>

            <button class="publish-btn">

                🚀 Publish Blog

            </button>

        </form>

    </div>

</div>

<script>

    CKEDITOR.replace('content');

</script>

</body>

</html>