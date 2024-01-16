<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="F4">
    <meta name="description" content="Beta version 1.040 for Job Daddy Program ">
    <meta name="keywords" content="jd, job daddy, jobdaddy">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jdbeta</title>
    <link rel="icon" type="image/x-icon" href="/jd_img/icon.ico">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Scripts -->
   

    <!--BOOTSTRAP CSS--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!--BOOTSTRAP JS --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!--Lottie Animations -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>

     <!---typing animation --->
     <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <link rel="stylesheet" href="/jd_css/layout.css">
    @yield('customCss')

    
</head>
<body >
    <div id="app" >
     
        @yield('header')

        <main class="mainContent">
            @yield('nav')
            @yield('content')
        </main>
    </div>

    @yield('customJs')

    <footer class="py-4" style="text-align: center; color:black; font-size:14px; font-weight:600;">
        Copyright 2023 Job Daddy - Job Portal. All rights Reserved
    </footer>

   
</body>
</html>
