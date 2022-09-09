<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
{{--    <meta name="description" content="شركة الصيهد للمقاولات العامة واعمال العزل" />--}}
{{--    <meta name="keywords" content="الصيهد الوسطى,صيهد الوسطى للمقاولات العامة والعزل الحديث,صيهد الوسطي العوازل,صيهد الوسطى للمقاولات,صيهد الوسطى للمقاولات العامة والعزل الحديث,العزل الحديث,العزل الحراري,العزل المائي,عزل مائي حراري,عزل خزانات اسطح,عزل خزانات,عزل اسطح,عزل حمامات,عزل فوم,عزل حديث,عوازل,شركة العازل,شركة للعوازل,شركة عزل بالرياض,عزل لفائف بيتومين,عزل ايبوكسي,Saihad general,Saihad construction,مقاول عزل,مقاولات الرياض,افضل شركة عوازل,فوم,عزل فوم,افضل اسعار عزل الحوائط,افضل الاسعار,عزل فوري,تواصل سريع,افضل انواع الفوم,افضل انواع العزل,عزل حوائط واسقف,عوازل الصيهد,الصيهد,صيهد" />--}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="">
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}

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
