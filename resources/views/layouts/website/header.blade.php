<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/revolution/css/navigation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/revolution/css/settings.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/vendorAsset/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/css/util.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('website/css/main.css')}}">
    @if (app()->getLocale()=='ar')
    	<link rel="stylesheet" type="text/css" href="{{ asset('website/css/styleAr.css') }}">
    @endif


<link href="{{ asset('admin/assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">--}}
<style>
    .hide-secttion{
        display: none;
    }
</style>


<link href="{{ websiteInfo_hlp('font_url') }}" rel="stylesheet">

<style>
    @keyframes loader08 {
        0%,
        100% {
            box-shadow: -13px 20px 0 {{ websiteInfo_hlp('main_color') }}, 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        25% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 {{ websiteInfo_hlp('main_color') }}, 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        50% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 {{ websiteInfo_hlp('main_color') }}, -13px 46px 0 rgba(5, 35, 58, 0.2);
        }
        75% {
            box-shadow: -13px 20px 0 rgba(5, 35, 58, 0.2), 13px 20px 0 rgba(5, 35, 58, 0.2), 13px 46px 0 rgba(5, 35, 58, 0.2), -13px 46px 0 {{ websiteInfo_hlp('main_color') }};
        }
    }


    /************************************************/
    /*main color*/
    /**************************************************/
    .btn-back-to-top,
    .top-bar,
    #rev_slider_3 .btn2:hover,
    #rev_slider_3 .btn1:hover,
    #rev_slider_2 .btn2:hover,
    #rev_slider_2 .btn1:hover,
    #rev_slider_1 .btn2:hover,
    #rev_slider_1 .btn1:hover,
    .swal-button:hover,
    .swal-button:active,
    .table_head,
    .bg-10,
    .kit-overlay2::before,
    .kit-overlay1::before,
    .hov-bg10:hover,
    .hov-btn1:hover

    {
        background-color: {{ websiteInfo_hlp('main_color') }};
    }

    .menu-mobile .main-menu>li>a:hover,
    .cl-10,
    .hov-cl10:hover,
    .hov-link1:hover
    {
        color: {{ websiteInfo_hlp('main_font_color') }};
    }

    .bcl-10,
    .hov-btn1:hover
    {
        border-color: {{ websiteInfo_hlp('main_color') }};
    }

    .kit-underline1::after{
        border-left: 70px solid {{ websiteInfo_hlp('main_color') }};
    }

    /************************************************/
    /*secondary color*/
    /**************************************************/
    .menu-desktop .main-menu>li:hover>a,
    .menu-mobile .sub-menu a:hover,
    .rs2-select2 .select2-container--default .select2-selection--single .select2-selection__arrow::after,
    .tab02 .nav-link.active,
    .tab02 .nav-link:hover,
    a.breadcrumb-item,
    .btn-num-product-up,
    .btn-num-product-down,
    .cl-11,
    .kit-symbol1::before,
    .hov-link2:hover,
    .hov-link3:hover,
    .hov-btn2:hover,
    .hov-btn3:hover,
    .hov-3:hover
    {
        color: {{ websiteInfo_hlp('secondary_font_color') }};
    }

    .menu-desktop .sub-menu li:hover,
    .menu-mobile .main-menu,
    #rev_slider_3 .btn1,
    #rev_slider_2 .btn1,
    #rev_slider_1 .btn1,
    .rs1-select2 .select2-container .select2-results__option--highlighted[aria-selected],
    .wrap-slick2 .dots-slick li.slick-active div,
    .wrap-slick1 .dots-slick li.slick-active div,
    .wrap-slick2 .dots-slick li:hover div,
    .wrap-slick1 .dots-slick li:hover div,
    .rs1-slick2.wrap-slick2 .dots-slick li.slick-active div,
    .rs1-slick2.wrap-slick2 .dots-slick li:hover div,
    .swal-button,
    .progress-inner,
    .progress-inner::before,
    .progress-inner::after,
    .pagi-item:hover,
    .pagi-item.active-pagi,
    .block1:hover,
    .bg-11
    {
        background-color: {{ websiteInfo_hlp('secondary_color') }};
    }

    .rs2-select2 .select2-container .select2-selection--single,
    .rs2-select2 .select2-container--open .select2-dropdown,
    .pagi-item,
    .wrap-num-product
    {
        border: 1px solid {{ websiteInfo_hlp('secondary_color') }};
    }

    .tab02 .nav-link.active {
        border-left: 2px solid {{ websiteInfo_hlp('secondary_color') }};
    }

    .pagi-item:hover,
    .pagi-item.active-pagi,
    .block1:hover,
    .bcl-11,
    .hov-btn3:hover,
    .hov-3:hover,
    .focus-in1:focus,
    .focus-in1:focus,
    .focus-in1:focus,
    .active-1,
    .active-2
    {
        border-color: {{ websiteInfo_hlp('secondary_color') }};
    }

    .cart-content {
        border-top: 3px solid {{ websiteInfo_hlp('secondary_color') }};
    }


    body{
        font-family: {!! websiteInfo_hlp('font_family') !!};
    }


</style>
