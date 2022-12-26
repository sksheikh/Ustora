<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora | @yield('title')</title>
    @include('front.includes.css')

</head>
<body>

@include('front.includes.header-top')<!-- End header area -->

@include('front.includes.header-brand')<!-- End site branding area -->

@include('front.includes.main-menu') <!-- End mainmenu area -->

@yield('body')

@include('front.includes.footer-top') <!-- End footer top area -->

@include('front.includes.footer-bottom') <!-- End footer bottom area -->

@include('front.includes.scripts')
@yield('script')
</body>
</html>
