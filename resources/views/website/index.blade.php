@extends('layouts.website.master')
@section('content')
    <!-- Slide -->
    <section class="slider {{ showSection_hlp('slider') }}"style="font-family: {!! websiteInfo_hlp('font_family') !!};">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    @foreach ($sliders as $slider)

                        <li data-transition="{{ $slideroption->image }}">
                            <img src="{{ asset($slider->image)}}" alt="IMG-SLIDE" class="rev-slidebg" style="">
                            <h2 class="tp-caption tp-resizeme caption-1 text-uppercase" style="text-shadow: 2px 2px #000033;font-family: {{ websiteInfo_hlp('font_family') }};"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"{{ $slideroption->word }};","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['48', '48', '48', '38']"
                                data-lineheight="['58', '58', '58', '58']" data-color="['#FFF']"
                                data-textAlign="['center', 'center', 'center', 'center']" data-x="['center']"
                                data-y="['center']" data-hoffset="['0', '0', '0', '0']"
                                data-voffset="['-83', '-83', '-83', '-93']" data-width="['1200','992','768','480']"
                                data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']"
                                data-paddingtop="[0, 0, 0, 0]"
                                data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
                                data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="off">
                                {{$slider->title}}</h2>
                            <span class="tp-caption tp-resizeme caption-2"
                               data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"{{ $slideroption->word }};","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-visibility="['on', 'on', 'on', 'on']"
                               data-fontsize="['30', '30', '30', '25']" data-lineheight="['39', '39', '39', '39']"
                               data-color="['#FFF']" data-textAlign="['center', 'center', 'center', 'center']"
                               data-x="['center']" data-y="['center']" data-hoffset="['0', '0', '0', '0']"
                               data-voffset="['-13', '-13', '-13', '-13']" data-width="['1200','992','768','480']"
                               data-height="['auto', 'auto', 'auto', 'auto']" data-whitespace="['normal']"
                               data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]"
                               data-paddingbottom="[0, 0, 0, 0]" data-paddingleft="[15, 15, 15, 15]"
                               data-basealign="slide" data-responsive_offset="off" style="text-shadow: rgb(0 0 0) 4px 2px; font-family: {!! websiteInfo_hlp('font_family') !!};">
                                {{$slider->text}}

                            </span>
                        </li>
                @endforeach


                </ul>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="bg-0 p-t-92 p-b-60 {{ showSection_hlp('services') }}">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                    {{__('site/app.services')}}
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                @foreach($services as $service)
                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                        <div class="bg-10 h-full">
                            <a href="{{ route('service.details',$service->id) }}" class="hov-img0 of-hidden bg-0">
                                <img src="{{asset($service->image)}}" alt="IMG">
                            </a>

                            <div class="p-rl-30 p-t-26 p-b-20">
                                <h4 class="p-b-9">
                                    <a href="{{ route('service.details',$service->id) }}" class="t1-m-1 cl-0 hov-link2 trans-02">
                                        {{$service->title}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Why chosse us -->
    <section class="bg-12 p-t-92 p-b-70 {{ showSection_hlp('why_chosse_us') }}">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                    {{ __('site/app.why_choose_us') }}
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                @foreach($features as $feature)
                    <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                        <!-- Block1 -->
                        <div class="block1 trans-04">
                            <div class="block1-show trans-04">
                                <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                                    <img class="symbol-dark trans-04" src="{{asset($feature->image)}}" alt="IMG">
                                    <img class="symbol-light ab-t-c op-00 trans-04" src="{{asset($feature->image)}}"
                                         alt="IMG">
                                </div>

                                <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04"
                                    style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                                    {{$feature->title}}
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Call back -->
    <section class="bg-10 p-t-92 p-b-45 {{ showSection_hlp('request_call_back') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-30">
                    <!-- Title section -->
                    <div class="flex-col-c-s p-b-20">
                        <h3 class="t1-b-1 cl-0 m-b-11">
                            {{__('site/app.Request A Call Back')}}
                        </h3>

                        <div class="size-a-2 bg-0"></div>
                    </div>

                    <p class="t1-s-2 cl-0">
                        {{__('site/app.Leave_your_information')}}
                    </p>
                </div>

                <form class="col-lg-8 p-b-30 p-t-8" action="" method="post" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 p-b-25">
                            <div class="size-a-3">
                                <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="name"
                                       placeholder="{{__('site/app.Your Name')}}" id="call_name" required>
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <div class="size-a-3">
                                <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="number" name="phone"
                                       placeholder="{{__('site/app.Phone Number')}}" id="call_phone" required>
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <div class="size-a-3">
                                <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="email" id="call_email" name="email" placeholder="{{__('site/app.Email')}}">
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <button type="button" onclick="request_call()"
                                class="flex-c-c size-a-4 bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15">
                                {{__('site/app.Submit')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Project -->
    <section class="bg-12 p-t-92 p-b-60  {{ showSection_hlp('projects') }}">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                    {{__('site/app.projects')}}
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                @foreach($projects as $project)
                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                        <!-- Block2 -->
                        <a href="{{route('project.details',$project->id)}}">
                            <div class="block2 bg-img2"
                             style="background-image: url( {{asset($project->image)}});">
                            <div class="block2-content trans-04">
                                <a href="{{route('project.details',$project->id)}}">
                                    <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04"
                                        style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                                        {{$project->title}}
                                    </h4>
                                </a>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Number -->
    {{-- <div class="parallax100 kit-overlay1 p-tb-38" style="background-image: url({{ asset('website/images/bg-01.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
                        <span class="t1-b-2 cl-0 txt-center p-b-5 counter">
							450
						</span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							Projects
						</span>
                    </div>
                </div>

                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
                        <span class="t1-b-2 cl-0 txt-center p-b-5 counter">
							205
						</span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							advisor
						</span>
                    </div>
                </div>

                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
                        <span class="t1-b-2 cl-0 txt-center p-b-5">
							<span class="counter">95</span>%
                        </span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							satisfaction rate
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- News -->
    <section class="bg-12 p-t-92 p-b-60  {{ showSection_hlp('news') }}">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11" style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                    الاخبار
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center" style="font-family: {!! websiteInfo_hlp('font_family') !!};">

                @foreach($news as $new)
                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                        <div class="bg-0 h-full">
                            <a href="{{ route('news.details',$new->id) }}" class="hov-img0 of-hidden">
                                <img src="{{asset($new->image)}}" alt="IMG">
                            </a>

                            <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                                <h4 class="p-b-12">
                                    <button class="t1-m-1 cl-3 hov-link2 trans-02"
                                            style="font-family: {!! websiteInfo_hlp('font_family') !!};">
                                        {{$new->title}}
                                    </button>
                                </h4>

                                <div class="flex-wr-s-c p-b-9">
                                    <div class="p-r-20">
                                        <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                        <span class="t1-s-2 cl-7">
										{{$new->created_at->diffforhumans()}}
									</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Partners -->
    {{-- <section class="bg-0 p-t-92 p-b-40">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Business Partners
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                    <a href="#">
                        <img class="hov-img2 trans-02 max-s-full" src="{{ asset('website/images/icons/partner-01.png')}}" alt="IMG">
                    </a>
                </div>

                <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                    <a href="#">
                        <img class="hov-img2 trans-02 max-s-full" src="{{ asset('website/images/icons/partner-02.png')}}" alt="IMG">
                    </a>
                </div>

                <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                    <a href="#">
                        <img class="hov-img2 trans-02 max-s-full" src="{{ asset('website/images/icons/partner-03.png')}}" alt="IMG">
                    </a>
                </div>

                <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                    <a href="#">
                        <img class="hov-img2 trans-02 max-s-full" src="{{ asset('website/images/icons/partner-04.png')}}" alt="IMG">
                    </a>
                </div>

                <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                    <a href="#">
                        <img class="hov-img2 trans-02 max-s-full" src="{{ asset('website/images/icons/partner-05.png')}}" alt="IMG">
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Testimonials -->
    {{-- <section class="parallax100 kit-overlay2 p-t-92 p-b-90" style="background-image: url({{ asset('website/images/bg-02.jpg')}});">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-0 txt-center m-b-11">
                    Testimonials
                </h3>

                <div class="size-a-2 bg-0"></div>
            </div>

            <!-- Slick1 -->
            <div class="wrap-slick1">
                <div class="slide-slick">
                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-01.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-02.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-01.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-02.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-01.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Marie Crawford
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick p-rl-15 wrap-block3">
                        <div class="block3 d-flex">
                            <div class="block3-content d-flex">
                                <div class="block3-pic wrap-pic-w">
                                    <img src="{{ asset('website/images/ava-02.jpg')}}" alt="IMG">
                                </div>

                                <div class="block3-text d-flex w-full-sr575">
                                    <span class="block3-text-child t1-m-1 text-uppercase cl-0 p-b-4">
										Jerry Alexander
									</span>

                                    <span class="block3-text-child t1-s-3 cl-14 p-b-9">
										Wall Street Combany
									</span>

                                    <p class="block3-text-child t1-s-2 cl-13">
                                        The point of using Lorem Ipsum is that it has a normal distr bution of letters, as opposed to using Many desktop publis shing packages and web page Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!-- Sign up -->
    <section class="bg-0 p-t-92 p-b-90  {{ showSection_hlp('subscritoin') }}">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-44">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    {{__('site/app.sign_up')}}
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="size-w-1 m-rl-auto">
                <p class="size-w-2 m-rl-auto t1-s-2 cl6 txt-center p-b-13">

                </p>

                <form class="flex-wr-c-c">
                    <input class="size-a-5 bo-all-1 bcl-11 t1-m-2 cl-6 plh-6 p-rl-20 w-full-sr575 m-tb-10" type="email"
                           name="email" id="subemail" placeholder="email@example.com" required>

                    <button onclick="submitSubscription()" type="button" class="size-a-6 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 m-tb-10">
                        {{__('site/app.Subscribe')}}
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
