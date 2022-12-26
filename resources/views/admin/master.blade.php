<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ustora - @yield('title') </title>
    <!-- Start CSS Link-->
    @include('admin.includes.css')
    <!-- End CSS Link-->
</head>
<body class="sb-nav-fixed">
<!-- Start Top Navbar-->
@include('admin.includes.top-navbar')
<!-- End Top Navbar-->
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <!-- Start Side Navbar-->
        @include('admin.includes.side-navbar')
        <!-- End Side Navbar-->
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('body')
        </main>
        @include('admin.includes.footer')
    </div>
</div>

<!-- Start Scripts Link-->
@include('admin.includes.scripts')
@yield('script')
<!-- End Scripts Link-->
</body>
</html>

