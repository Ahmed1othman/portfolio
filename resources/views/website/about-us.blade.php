@extends('layouts.website.master')
@section('title')
    {{ __('site/app.about_us') }}
@endsection
@section('content')

	<!-- Title page -->
	<section class="bg-img1 kit-overlay1 {{ showSection_hlp('about_us') }}" style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('about_image')) }});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{__('site/app.about_us')}}
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('home')}}" class="breadcrumb-item">
					Home
				</a>

				<span class="breadcrumb-item">
					{{__('site/app.About Us')}}
				</span>
			</div>
		</div>
	</section>

	<!--  -->
	<section class="bg-0 p-t-92 p-b-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-10 p-b-35">
					<!-- Title section -->
					<div class="flex-col-c-s p-b-35">
						<h3 class="t1-b-1 cl-3 m-b-11">
							{{ __('admin/app.about_us') }}
						</h3>

						<div class="size-a-2 bg-3"></div>
					</div>

					<div class="p-r-20 p-r-0-sr767">
						{!!websiteInfo_hlp('about_us_'.App::getLocale()) !!}
					</div>
				</div>

			</div>
            @if(websiteInfo_hlp('portfolio_pdf'))
            <hr>
            <div class="text-center">
{{--                    <a href="{{route('downloadPdf')}}" class="btn btn-primary btn-lg" style="color: white; width: 40%">{{__('site/app.download_our_cv')}} <i class="fa fa-download"></i></a>--}}
                    <a href="{{asset('storage/front/'.websiteInfo_hlp('portfolio_pdf'))}}" target="_blank" class="btn btn-primary btn-lg" style="color: white; width: 40%">{{__('site/app.download_our_cv')}} <i class="fa fa-download"></i></a>
            </div>
            @endif
		</div>
	</section>
@endsection
