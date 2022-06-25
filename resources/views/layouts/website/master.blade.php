<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="this my acount to my son" />
    <meta name="keywords" content="Html,css,utf,javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="">
    @yield('meta')
   <title>@yield('title') - {{ websiteInfo_hlp('website_name_'.app()->getLocale())}}</title>

    @include('layouts.website.header')


</head>
<body class="animsition" style="font-family: 'Cairo', sans-serif;">
    @include('layouts.website.navbar')
    @yield('content')

    @include('layouts.website.contact_buttons._whatsapp')
    @include('layouts.website.contact_buttons._call')
    @include('layouts.website.footer')
    @include('layouts.website.footer-script')
</body>

</html>
