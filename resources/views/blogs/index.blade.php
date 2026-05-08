<!DOCTYPE html>
<html>

<head>

    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#eef2ff;
    font-family:'Poppins',sans-serif;
    overflow-x:hidden;
}

/* SIDEBAR */

.sidebar{
    width:260px;
    height:100vh;
    background:linear-gradient(180deg,#0f172a,#1e293b);
    position:fixed;
    left:0;
    top:0;
    color:white;
    padding-top:25px;
    box-shadow:5px 0 25px rgba(0,0,0,0.15);
}

.sidebar h3{
    text-align:center;
    margin-bottom:40px;
    font-size:30px;
    font-weight:700;
    color:#60a5fa;
}

.sidebar a{
    display:block;
    color:#dbeafe;
    padding:16px 28px;
    text-decoration:none;
    transition:0.3s;
    font-size:17px;
    margin:5px 10px;
    border-radius:12px;
}

.sidebar a:hover{
    background:linear-gradient(135deg,#2563eb,#38bdf8);
    transform:translateX(6px);
    color:white;
}

/* MAIN */

.main{
    margin-left:260px;
    padding:35px;
}

/* TOPBAR */

.topbar{
    background:rgba(255,255,255,0.75);
    backdrop-filter:blur(10px);
    padding:22px 30px;
    border-radius:22px;
    margin-bottom:30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.topbar h4{
    font-size:34px;
    font-weight:700;
    color:#0f172a;
}

/* BUTTONS */

.btn-primary{
    background:linear-gradient(135deg,#2563eb,#38bdf8);
    border:none;
    padding:12px 24px;
    border-radius:14px;
    font-weight:600;
    transition:0.3s;
}

.btn-primary:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 20px rgba(37,99,235,0.3);
}

.btn-warning{
    border-radius:10px;
}

.btn-danger{
    border-radius:10px;
}

/* TABLE CONTAINER */

.table-box{
    background:rgba(255,255,255,0.8);
    backdrop-filter:blur(10px);
    padding:28px;
    border-radius:25px;
    box-shadow:0 10px 35px rgba(0,0,0,0.08);
}

/* TABLE */

.table{
    overflow:hidden;
    border-radius:18px;
}

.table thead{
    background:linear-gradient(135deg,#2563eb,#38bdf8);
    color:white;
}

.table thead th{
    padding:18px;
    border:none;
    font-size:15px;
}

.table tbody tr{
    transition:0.3s;
}

.table tbody tr:hover{
    background:#eff6ff;
    transform:scale(1.005);
}

.table td{
    vertical-align:middle;
    padding:18px;
    font-size:15px;
}

/* IMAGE */

table img{
    width:95px;
    height:65px;
    object-fit:cover;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
}
.action-btn{
    border:none;
    width:78px;
    height:36px;
    border-radius:10px;
    font-weight:600;
    text-decoration:none;
    color:white !important;
    transition:0.3s;
    margin-right:4px;
    font-size:13px;

    display:inline-flex;
    align-items:center;
    justify-content:center;
}
.view-btn{
    background:linear-gradient(135deg,#2563eb,#3b82f6);
}

.edit-btn{
    background:linear-gradient(135deg,#f59e0b,#fbbf24);
}

.delete-btn{
    background:linear-gradient(135deg,#ef4444,#f87171);
}

/* GLASS EFFECT */

.table-box,
.topbar{
    border:1px solid rgba(255,255,255,0.5);
}
.table-responsive{
    overflow-x:auto;
}

table{
    min-width:1100px;
}

/* SCROLLBAR */

::-webkit-scrollbar{
    width:10px;
}

::-webkit-scrollbar-thumb{
    background:#2563eb;
    border-radius:20px;
}
.mobile-blog-cards{
    display:none;
}

.mobile-card{
    background:white;
    padding:18px;
    border-radius:20px;
    margin-bottom:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.mobile-img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:14px;
    margin-bottom:15px;
}

.mobile-category{
    color:#2563eb;
    font-weight:600;
}

.mobile-date{
    color:gray;
    font-size:14px;
}

.mobile-actions{
    display:flex;
    gap:10px;
    margin-top:15px;
}

@media(max-width:768px){

    .desktop-table{
        display:none;
    }

    .mobile-blog-cards{
        display:block;
    }

    .main-content{
        padding:15px;
    }

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

}

/* MOBILE */

@media(max-width:900px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

    .main{
        margin-left:0;
        padding:20px;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
    }

}

</style>

</head>

<body>

<div class="sidebar">

    <h3>

        JobYaari Admin

    </h3>

    <a href="/blogs">

        Manage Blogs

    </a>

    <a href="/blogs/create">

        Add Blog

    </a>

    <a href="/">

        Visit Website

    </a>

    <a href="/about">

        About

    </a>

    <a href="/contact">

        Contact

    </a>

</div>

<div class="main">

    <div class="topbar">

        <h4>

            Manage Blogs

        </h4>

        <a href="/blogs/create"
           class="btn btn-primary">

            + Add Blog

        </a>

    </div>

    <div class="table-box table-responsive">
 
    <div class="desktop-table">
        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Actions</th>

                </tr>

            </thead>

            <tbody>

                @foreach($blogs as $blog)

                <tr>

                    <td>

                        {{ $blog->id }}

                    </td>

                    <td>

                        <img src="{{ asset('images/' . $blog->image) }}">

                    </td>

                    <td>

                        {{ $blog->title }}

                    </td>

                    <td>

                        {{ $blog->category }}

                    </td>

                    <td>

                        {{ $blog->created_at->format('d M Y') }}

                    </td>

                    <td style="white-space:nowrap;">

                    <a href="{{ route('blogs.show', $blog->id) }}"
                    class="action-btn view-btn">

                        View

                    </a>

                    <a href="{{ route('blogs.edit', $blog->id) }}"
                    class="action-btn edit-btn">

                        Edit

                    </a>

                <form action="{{ route('blogs.destroy', $blog->id) }}"
                    method="POST"
                    style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="action-btn delete-btn">

                        Delete

                    </button>

                </form>

            </td>

                </tr>

                @endforeach

            </tbody>

        </table>
        </div>
        <div class="mobile-blog-cards">

    @foreach($blogs as $blog)

    <div class="mobile-card">

        <img src="{{ asset('images/' . $blog->image) }}"
             class="mobile-img">

        <h4>{{ $blog->title }}</h4>

        <p class="mobile-category">

            {{ $blog->category }}

        </p>

        <p class="mobile-date">

            {{ $blog->created_at->format('d M Y') }}

        </p>

        <div class="mobile-actions">

            <a href="{{ route('blogs.show',$blog->id) }}"
               class="action-btn view-btn">

                View

            </a>

            <a href="{{ route('blogs.edit',$blog->id) }}"
               class="action-btn edit-btn">

                Edit

            </a>

        </div>

    </div>

    @endforeach

</div>

    </div>

</div>

</body>

</html>