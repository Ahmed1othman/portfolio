@extends('layouts.admin.master')
@section('title')
    {{ __('admin/app.create_slider') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">
                <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">{{ __('admin/app.create_slider') }}</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" action="{{ route('sliders.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="id" id="id" value="{{$row->id}}">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">{{ __('admin/sliders.title') }}</label>
                                        <input type="text" name="title" value="{{ $row->getTranslation('title', 'en') }}" class="form-control @error('title') is-invalid @enderror" id="title">
                                        @error('title')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
									<div class="col-md-6">
										<label for="title_ar" class="form-label">{{ __('admin/sliders.title_ar') }}</label>
										<input type="text" name="title_ar" value="{{ $row->getTranslation('title', 'ar') }}" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar">
                                        @error('title_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
									</div>


                                    <div class="col-12">
                                        <label for="text" class="form-label">{{ __('admin/sliders.text') }}</label>
                                        <textarea class="form-control ckeditor @error('text') is-invalid @enderror" value="" name="text"  id="text" placeholder="{{ __('admin/app.text_ar') }}">{{ $row->getTranslation('text', 'en') }}</textarea>
                                        @error('text')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
									<div class="col-12">
										<label for="text_ar" class="form-label">{{ __('admin/sliders.text_ar') }}</label>
										<textarea class="form-control ckeditor @error('text_ar') is-invalid @enderror" value="" name="text_ar"  id="text_ar" placeholder="{{ __('admin/app.text_ar') }}">{{ $row->getTranslation('text', 'ar') }}</textarea>
                                        @error('text_ar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
									</div>
									<div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" {{ $row->active==1?'checked':'' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        </div>
                                    </div>
									<div class="col-lg-4">
                                        @if ($row->image)
                                        <a href="{{asset($row->image)}}" data-fancybox="group2">
                                            <img width="75px" height="50px" src="{{asset($row->image)}}" alt="{{$row->title}}" class="">
                                        </a>
                                        @endif
                                    </div>
									<div class="col-lg-8">
                                        <input type="file" class="form-control" name="photo" aria-label="file example" required accept="image/*" >
									</div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary px-5">{{ __('admin/app.save') }}</button>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
