<?php

?>
<html lang="uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>App Name - @yield('title')</title>
<!-- Styles -->
<link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
        <style>
            .admin {
                display: flex;
                flex-wrap: nowrap;
                height: 100vh;
                height: -webkit-fill-available;
                max-height: 100vh;
                overflow-x: auto;
                overflow-y: hidden;
            }

        </style>
</head>
<body>
<main class="admin">
    @section('sidebar')
        <div class="d-flex flex-column flex-shrink-0 admin-navbar">
            <div class="d-flex align-items-center logo">
                Admin Panel CMS
            </div>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370" aria-current="page">

                        <i class="bi bi-house icone-2x"></i> <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer2 icone-2x"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link {{ (request()->is('admin/page*')) ? 'active' : 'text-5a6370' }}">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Page</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/pages" class="d-flex align-items-center nav-link text-5a6370 ">
                        <i class="bi bi-speedometer icone-2x"></i> <span>Pages</span>
                    </a>
                </li>
            </ul>
        </div>
    @show
    <div class="d-flex flex-column w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex me-auto mb-2 mb-lg-0">
                        <div class="input-group mb-0">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control me-2" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </form>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="right:0; left: auto;">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
        @yield('content')
    </div>

</main>



<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
