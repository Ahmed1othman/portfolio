<footer >
    <div class="parallax100 kit-overlay1 p-t-35 p-b-10 {{ showSection_hlp('footer') }}" style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('footer_image'))}});">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">

                   <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                       <a href="#">
                           <img class="max-s-full" src="{{ asset('storage/front/'.websiteInfo_hlp('logo'))}}" alt="{{ websiteInfo_hlp('website_name') }}">
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

                <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
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
                                {{ websiteInfo_hlp('address') }}
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
                    <div class="size-h-1 flex-s-e m-b-18">
                        <h4 class="t1-m-3 text-uppercase cl-0">
                            {{ __('site/app.pages') }}
                        </h4>
                    </div>

                    <div class="flex-wr-s-s">
                        @foreach(customPages() as $customPage)
                        <ul class="w-50">
                            <li class="kit-list1 p-b-9">
                                <a href="{{ route('customPage',$customPage->name) }}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                    {{ $customPage->title }}
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                Copyright @ {{ date('Y') }} Developed by Ahmed Othman. All rights reserved.
            </span>
        </div>
    </div>
</footer>
