 <!-- Header -->
 <header>
     <!-- Header desktop -->
     <nav class="container-header-desktop" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
         <div class="top-bar">
             <div class="content-topbar container flex-sb-c h-full">
                 <div class="size-w-0 flex-wr-s-c">
                     <div class="t1-s-1 cl-13 m-r-50">
                         <span class="fs-16 m-r-6">
                             <i class="fa fa-home" aria-hidden="true"></i>
                         </span>
                         <span>{{ websiteInfo_hlp('address_'.App::getLocale()) }}</span>
                     </div>

                     <div class="t1-s-1 cl-13 m-r-50">
                         <span class="fs-16 m-r-6">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                         </span>
                         <span>{{ websiteInfo_hlp('phone') }}</span>
                     </div>
                 </div>

                 <div class="text-nowrap">
                     <a href="{{ websiteInfo_hlp('fb_link') }}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                         <i class="fa fa-facebook-official"></i>
                     </a>

                     <a href="{{ websiteInfo_hlp('twitter_link') }}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                         <i class="fa fa-twitter"></i>
                     </a>


                     <a href="{{ websiteInfo_hlp('instagram_link') }}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                         <i class="fa fa-instagram"></i>
                     </a>

                     <a href="{{ websiteInfo_hlp('linked_link') }}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                         <i class="fa fa-linkedin"></i>
                     </a>
                 </div>
             </div>
         </div>



         <div class="wrap-menu-desktop">
             <div class="limiter-menu-desktop container">
                 <!-- Logo desktop -->
                 <div class="logo">

                     <a href="{{ route('home') }}">
                         @if (websiteInfo_hlp('logo_'.App::getLocale()))
                             <img src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}"
                                 alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}" >
                         @endif
                     </a>
                 </div>

                 <!-- Menu desktop -->
                 <div class="menu-desktop">
                     <ul class="main-menu respon-sub-menu">
                         @foreach (navbar_hlp() as $item)

                             <li>
                                 <a href="{{ route($item->route) }}" style="font-family: {!! websiteInfo_hlp('font_family') !!};">  {{ __('site/app.'.$item->title) }}</a>

                             </li>
                         @endforeach

                             <li style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                                 <a href="#" style="font-family: {!! websiteInfo_hlp('font_family') !!};">{{trans('admin/news.lang')}}</a>
                                 <ul class="sub-menu">
                                     @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                         <li>
                                             <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                 {{ $properties['native'] }}
                                             </a>
                                         </li>
                                     @endforeach
                                 </ul>
                             </li>
                         {{-- <li>
                             <a href="about.html">About Us</a>
                         </li>

                         <li>
                             <a href="services-list.html">Services</a>

                         </li>

                         <li>
                             <a href="news-grid.html">News</a>

                         </li>

                         <li>
                             <a href="projects-grid.html">Projects</a>

                         </li>

                         <li>
                             <a href="shop-grid.html">Shop</a>

                         </li>

                         <li>
                             <a href="contact.html">Contact us</a>
                         </li> --}}
                     </ul>
                 </div>
             </div>
         </div>
     </nav>

     <!-- Header Mobile -->
     <nav class="container-header-mobile">
         <div class="wrap-header-mobile">
             <!-- Logo moblie -->
             <div class="logo-mobile">
                 <a href="index.html"><img src="{{ asset('website/images/icons/logo-01.png') }}" alt="LOGO"></a>
             </div>


             <!-- Button show menu -->
             <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                 <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                 </span>
             </div>
         </div>

         <div class="menu-mobile">
             <ul class="top-bar-m p-l-20 p-tb-8">
                 <li>
                     <div class="t1-s-1 cl-5 p-tb-3">
                         <span class="fs-16 m-r-6">
                             <i class="fa fa-home" aria-hidden="true"></i>
                         </span>
                         <span>379 5Th Ave New York, Nyc 10018</span>
                     </div>
                 </li>

                 <li>
                     <div class="t1-s-1 cl-5 p-tb-3">
                         <span class="fs-16 m-r-6">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                         </span>
                         <span>(+1) 96 716 6879</span>
                     </div>
                 </li>

                 <li>
                     <div class="t1-s-1 cl-5 p-tb-3">
                         <span class="fs-16 m-r-6">
                             <i class="fa fa-clock-o" aria-hidden="true"></i>
                         </span>
                         <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                     </div>
                 </li>

                 <li>
                     <div>
                         <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                             <i class="fa fa-facebook-official"></i>
                         </a>

                         <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                             <i class="fa fa-twitter"></i>
                         </a>

                         <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                             <i class="fa fa-google-plus"></i>
                         </a>

                         <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                             <i class="fa fa-instagram"></i>
                         </a>

                         <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                             <i class="fa fa-linkedin"></i>
                         </a>
                     </div>
                 </li>
             </ul>
         </div>
     </nav>
 </header>
