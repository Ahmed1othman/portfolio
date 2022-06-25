@extends('layouts.website.master')
@section('title')
    {{__('site/app.contact_us')}}
@endsection
@section('content')

	<!-- Title page -->
	<section class="bg-img1 kit-overlay1 " style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('contact_image')) }});">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				{{__('site/app.contact_us')}}
			</h2>

			<div class="flex-wr-c-c">
				<a href="index.html" class="breadcrumb-item">
                    {{__('site/app.home')}}
				</a>

				<span class="breadcrumb-item">
					{{__('site/app.contact_us')}}
				</span>
			</div>
		</div>
	</section>

	<!--  -->
	<section class="bg-0 p-t-95 p-b-40 " >
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-6 p-b-60 {{ showSection_hlp('contact_us') }}">
					<h3 class="t1-m-5 cl-3 m-b-44">
						{{ __('site/app.send_us_a_message') }}
					</h3>

					<form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact">
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" id="contact_name" name="name" placeholder="{{ __('site/app.your_name') }}">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" id="contact_email" name="email" placeholder="{{ __('site/app.your_email') }}">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="number" id="contact_phone" name="phone" placeholder="{{ __('site/app.your_number') }}">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" id="contact_msg" placeholder="{{ __('site/app.your_message') }}"></textarea>
						</div>

						<button type="button" onclick="submitContactUs()" class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
							{{ __('site/app.send_email') }}
						</button>
					</form>
				</div>

				<div class="col-sm-10 col-md-6 p-b-60">
					<div class="p-l-30 p-l-0-sr767">
						<h3 class="t1-m-5 cl-3 m-b-38">
							{{ __('admin/app.contact_info') }}
						</h3>


						<ul class="p-t-11">
							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									{{ websiteInfo_hlp('address') }}
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
                                    {{ websiteInfo_hlp('email') }}

								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-6 p-b-8">
								<span class="size-w-3 cl-5">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
                                    {{ websiteInfo_hlp('phone')}}
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
