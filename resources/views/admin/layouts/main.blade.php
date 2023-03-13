<!doctype html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>@yield('title') | Admin</title>

    <link href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/" rel="canonical">

    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon"
        sizes="180x180">
    <link type="image/png" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" rel="icon"
        sizes="32x32">
    <link type="image/png" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" rel="icon"
        sizes="16x16">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json" rel="manifest">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" rel="mask-icon"
        color="#712cf9">
    <link href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" rel="icon">
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        main>.container {
            padding: 60px 15px 0;
        }
    </style>

</head>

<body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fixed navbar</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" type="button"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('home') }}" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" aria-label="Search" placeholder="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <form class="d-flex mx-2" action="{{ route('logout') }}" method="post">
                        @csrf
                        <input class="btn btn-outline-danger" type="submit" value="Logout">
                    </form>

                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">

        @if ($errors->any())
            <div class="container">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>


    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


</body>

</html>
