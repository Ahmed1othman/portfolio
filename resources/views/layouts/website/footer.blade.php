<footer >
    <div class="parallax100 kit-overlay1 p-t-35 p-b-10 {{ showSection_hlp('footer') }}" style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('footer_image'))}});">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">

                   <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                       <a href="{{route('home')}}">
                           <img class="max-s-full" src="{{ asset('storage/front/' . websiteInfo_hlp('logo_'.App::getLocale())) }}" alt="{{ websiteInfo_hlp('website_name_'.App::getLocale()) }}">
                       </a>
                   </div>

                   <div>


                       <div class="flex-wr-s-c p-t-10">
                           <a href="{{ websiteInfo_hlp('fb_link') }}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                               <i class="fa fa-facebook"></i>
                           </a>

                           <a href="{{ websiteInfo_hlp('twitter_link') }}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                               <i class="fa fa-twitter"></i>
                           </a>


                           <a href="{{ websiteInfo_hlp('instagram_link') }}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                               <i class="fa fa-instagram"></i>
                           </a>

                           <a href="{{ websiteInfo_hlp('linked_link') }}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                               <i class="fa fa-linkedin"></i>
                           </a>
                       </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-4 p-b-20">
                    <div class="size-h-1 flex-s-e m-b-18">
                        <h4 class="t1-m-3 text-uppercase cl-0">
                            {{__('site/app.contact_us')}}
                        </h4>
                    </div>

                    <ul>
                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('address_'.App::getLocale()) }}
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('email') }}
                            </span>
                        </li>

                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('phone') }}
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28371.6951314864!2d31.169437613584094!3d27.267401160456462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450590e9390a91%3A0x57a481f5604fd9e!2z2KPYqNmG2YjYqNiMINmF2LHZg9iyINij2KjZhtmI2KjYjCDYo9iz2YrZiNi3IDIyNTE1NTc!5e0!3m2!1sar!2seg!4v1653137810242!5m2!1sar!2seg" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                @if(App::getLocale()=='en')
                Copyright @ {{ date('Y') }} For <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_en')}}</a> </span>. All rights reserved.
                @else
                    جميع الحقوق محفوظة لـ <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_ar')}}</a> </span> @ {{date('Y')}}
                @endif
            </span>
        </div>
    </div>
</footer>
