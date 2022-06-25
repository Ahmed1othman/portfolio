<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="this my acount to my son" />
    <meta name="keywords" content="Html,css,utf,javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('meta')

    <title>@yield('title') - {{__('admin/app.dashboard')}}</title>
    @include('layouts.admin.header')
</head>

<body style="font-family: 'Cairo', sans-serif;">
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('layouts.admin.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('layouts.admin.navbar')
    <!--end header -->
    <!--start page wrapper -->
        @yield('content')
        @include('layouts.admin.footer')

</div>





    @include('layouts.admin.footer-script')
</body>

</html>
