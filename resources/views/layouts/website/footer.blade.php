<div class="col-sm-12 col-md-12 col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.70230284269!2d46.662416715000425!3d24.737098584112296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x837cee8dce08f3a1!2zMjTCsDQ0JzEzLjYiTiA0NsKwMzknNTIuNiJF!5e0!3m2!1sen!2seg!4v1660079021243!5m2!1sen!2seg" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<footer >
    <div class="justify-content-center parallax100 kit-overlay1 p-t-35 p-b-10 {{ showSection_hlp('footer') }}" style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('footer_image'))}});">
        <div class="container text-center justify-content-center">
            <div class="row text-center justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 p-b-20 justify-content-center">
                   <div class="size-h-2 p-b-6 m-b-18 justify-content-center">
                       <a href="{{route('home')}}" style="display: block;margin-bottom: 10px" >
                           <h2 style="color: white;font-size: 25px">
                               {{ websiteInfo_hlp('website_name_'.app()->getLocale()) }}
                           </h2>
                       </a>
                   </div>

                   <div class="justify-content-center">
                       <div class="flex-wr-s-c p-t-10 justify-content-center">
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

                <div class="col-sm-12 col-md-12 p-b-20 justify-content-center">
                    <div class="size-h-1 flex-s-e m-b-18 justify-content-center">
                        <h4 class="t1-m-3 text-uppercase cl-0">
                            {{__('site/app.contact_us')}}
                        </h4>
                    </div>

                    <ul class="justify-content-center text-center txt-center">
                        <li class="t1-s-2 cl-13 p-b-9 justify-content-center">
                            <span class="size-w-3">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('address_'.App::getLocale()) }}
                            </span>
                        </li>

                        <li class=" t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('email') }}
                            </span>
                        </li>

                        <li class=" t1-s-2 cl-13 p-b-9">
                            <span class="size-w-3">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>

                            <span class="size-w-4">
                                {{ websiteInfo_hlp('phone') }}
                            </span>
                        </li>
                    </ul>
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
