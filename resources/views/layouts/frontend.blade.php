<!DOCTYPE html>
<html>

<head>

    <title>JobYaari</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    font-family:'Poppins',sans-serif;
}

body{
    background:#eef2ff;
    color:#0f172a;
}

/* NAVBAR */

.navbar{
    background:rgba(255,255,255,0.82);
    backdrop-filter:blur(12px);
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
    padding:14px 0;

    position:sticky;
    top:0;
    z-index:999;
}

.navbar-brand{
    font-size:28px;
    font-weight:700;
    color:#2563eb !important;
}

.nav-link{
    font-weight:600;
    color:#0f172a !important;
    transition:0.3s;
    position:relative;
    margin:0 10px;
}

.nav-link:hover{
    color:#2563eb !important;
}

.nav-link.active{
    color:#2563eb !important;
}

.nav-link.active::after,
.nav-link:hover::after{
    width:100%;
}

.nav-link::after{
    content:'';
    position:absolute;
    width:0;
    height:3px;
    background:#2563eb;
    left:0;
    bottom:-5px;
    border-radius:20px;
    transition:0.3s;
}
/* HERO */

.hero{
    background:
    linear-gradient(
        rgba(15,23,42,0.55),
        rgba(15,23,42,0.55)
    ),
    linear-gradient(135deg,#2563eb,#38bdf8);

    color:white;
    padding:70px 20px;
    border-radius:0 0 32px 32px;
    margin-bottom:40px;
    text-align:center;
    box-shadow:0 12px 35px rgba(37,99,235,0.2);
}

.hero h1{
    font-size:42px;
    font-weight:700;
    margin-bottom:10px;
}

.hero p{
    font-size:17px;
    margin:0;
}

/* BLOG CARD */

.blog-card{
    background:rgba(255,255,255,0.88);
    backdrop-filter:blur(12px);
    border-radius:24px;
    overflow:hidden;
    box-shadow:0 12px 35px rgba(0,0,0,0.07);
    transition:0.35s;
    margin-bottom:28px;
}

.blog-card:hover{
    transform:translateY(-8px) scale(1.01);
    box-shadow:0 22px 45px rgba(37,99,235,0.18);
}

.blog-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.blog-content{
    padding:22px;
}

.blog-content h4{
    font-size:34px;
    font-weight:700;
    margin-bottom:15px;
}

.blog-content h4{
    font-size:26px;
    font-weight:700;
    margin-bottom:10px;
}

/* SIDEBAR */

.sidebar-box{
    background:rgba(255,255,255,0.85);
    backdrop-filter:blur(12px);
    border-radius:22px;
    padding:22px;
    margin-bottom:24px;
    box-shadow:0 8px 25px rgba(0,0,0,0.06);
}

.sidebar-box h5{
    font-size:22px;
    font-weight:700;
    margin-bottom:18px;
}


/* CATEGORY BUTTON */

.category-btn{
    display:inline-block;
    background:white;
    color:#2563eb !important;

    border:2px solid #dbeafe;

    padding:9px 18px;
    border-radius:50px;

    text-decoration:none;
    font-size:14px;
    font-weight:600;

    transition:0.3s;
    margin:5px;
}

.category-btn:hover{
    background:#2563eb;
    color:white !important;
    border-color:#2563eb;

    transform:translateY(-3px);
}

/* BUTTON */

.btn-primary{
    background:linear-gradient(135deg,#2563eb,#38bdf8);
    border:none;
    border-radius:14px;
    padding:11px 22px;
    font-weight:600;
    transition:0.3s;
    box-shadow:0 10px 20px rgba(37,99,235,0.2);
}

.btn-primary:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 25px rgba(37,99,235,0.28);
}

/* INPUTS */

.form-control{
    border:none;
    border-radius:16px;
    padding:14px 18px;
    box-shadow:0 6px 20px rgba(0,0,0,0.06);
}

/* FOOTER */

footer{
    background:linear-gradient(135deg,#0f172a,#1e3a8a);
    color:white;
    text-align:center;
    padding:22px 12px;
    margin-top:35px;
    border-radius:24px 24px 0 0;
}

footer h5{
    font-size:22px;
    font-weight:700;
    margin-bottom:5px;
}

footer p{
    font-size:13px;
    margin:0;
    opacity:0.9;
}

.container{
    max-width:1250px;
}
.logout-btn{
    border:none;
    background:linear-gradient(135deg,#2563eb,#38bdf8);
    color:white;
    padding:10px 18px;
    border-radius:12px;
    font-weight:600;
    transition:0.3s;
}

.logout-btn:hover{
    transform:translateY(-2px);
}
.full-ticker{
    width:100%;

    background:#081028;

    color:white;

    padding:12px 0;

    font-size:15px;

    font-weight:600;

    overflow:hidden;
}

.full-ticker marquee{
    margin:0;
}
::-webkit-scrollbar{
    width:10px;
}

::-webkit-scrollbar-thumb{
    background:#2563eb;
    border-radius:20px;
}

/* MOBILE RESPONSIVE */

@media(max-width:768px){

    .hero{
    background:
    linear-gradient(
        rgba(15,23,42,0.55),
        rgba(15,23,42,0.55)
    ),
    linear-gradient(135deg,#2563eb,#38bdf8);

    color:white;
    padding:70px 20px;
    border-radius:0 0 32px 32px;
    margin-bottom:40px;
    text-align:center;
    box-shadow:0 12px 35px rgba(37,99,235,0.2);
}

    .hero h1{
        font-size:26px;
        line-height:1.2;
        margin-bottom:10px;
    }

    .hero p{
        font-size:14px;
        line-height:1.5;
    }

    .navbar{
        padding:10px 14px;
    }

    .navbar-brand{
        font-size:22px !important;
    }

    .blog-card{
        border-radius:16px;
        padding:12px;
    }

    .blog-card img{
        height:160px;
        object-fit:cover;
        border-radius:12px;
    }

    .blog-card h3{
        font-size:17px;
        line-height:1.4;
    }

    .blog-card p{
        font-size:13px;
    }

.category-btn{
    display:inline-flex;
    align-items:center;
    gap:6px;

    background:linear-gradient(135deg,#2563eb,#38bdf8);
    color:white !important;

    padding:10px 18px;
    border-radius:50px;

    text-decoration:none;
    font-size:14px;
    font-weight:600;

    box-shadow:0 10px 20px rgba(37,99,235,0.18);

    transition:0.35s ease;
}

.category-btn:hover{
    transform:translateY(-4px) scale(1.04);

    box-shadow:0 16px 30px rgba(37,99,235,0.28);

    background:linear-gradient(135deg,#1d4ed8,#0ea5e9);

    color:white;
}
    body{
        
        overflow-x:hidden;
    }
    .hero{
        padding:30px 15px !important;
        text-align:center;
    }
    .hero h1,
    .hero h2{
        font-size:28px !important;
    }
    .feature-box h5{
        font-size:18px;
    }

    .feature-icon{
        font-size:30px !important;
    }

    .form-control{
        height:45px !important;
        font-size:14px;
    }

    textarea.form-control{
        height:120px !important;
    }

    .btn{
        font-size:14px;
        padding:10px 18px;
    }
    .about-box,
    .contact-box,
    .feature-box{
        padding:18px !important;
        border-radius:18px;
    }

    .about-box h3,
    .contact-box h3{
        font-size:24px;
    }

    .about-box p,
    .contact-box p{
        font-size:14px;
        line-height:1.6;
    }
    .hero p{
        font-size:14px;
    }

    .navbar{
        padding:10px 15px !important;
    }

    .navbar-brand,
    .logo{
        font-size:22px !important;
    }
}
::-webkit-scrollbar{
    width:10px;
}

::-webkit-scrollbar-thumb{
    background:#2563eb;
    border-radius:20px;
}

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="/">

            JobYaari

        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            ☰

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="/">
                            Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('category/Jobs') ? 'active' : '' }}"
                        href="/category/Jobs">
                            Jobs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('category/Admit Card') ? 'active' : '' }}"
                        href="/category/Admit Card">
                            Admit Card
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('category/Result') ? 'active' : '' }}"
                        href="/category/Result">
                            Result
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="/about">
                            About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                        href="/contact">
                            Contact
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blogs*') ? 'active' : '' }}"
                    href="/blogs">

                        Admin Panel

                    </a>
                </li>

                    @auth

                    <li class="nav-item ms-2">

                        <form method="POST"
                            action="{{ route('logout') }}">

                            @csrf

                            <button type="submit" class="logout-btn">

                                Logout

                            </button>

                        </form>

                    </li>

                    @endauth

                <li class="nav-item ms-3">

                    <form action="/search" method="GET">

                        <input type="text"
                            name="search"
                            class="form-control"
                            placeholder="Search blogs...">

                    </form>

                </li>

            </ul>

        </div>

    </div>


</nav>

<div class="full-ticker">

    <marquee scrollamount="6">

        🔥 SSC CGL 2026 Notification Released |
        Railway Group D Apply Online |
        JEE Main Admit Card Released |
        Infosys Off Campus Hiring Started |
        UPSC Civil Services Notification Out

    </marquee>

</div>

@yield('content')

<footer>

    <h5>

        JobYaari © 2026

    </h5>

    <p>

        Latest Jobs, Results & Admit Cards

    </p>

    <div class="mt-3">

        📘 Facebook &nbsp;
        📸 Instagram &nbsp;
        ▶️ YouTube &nbsp;
        💼 LinkedIn

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>