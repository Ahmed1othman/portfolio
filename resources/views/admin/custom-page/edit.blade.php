@extends('layouts.admin.master')
@section('title')
    {{ __('admin/app.create_custom-page') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">
                <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">{{ __('admin/app.create_custom-page') }}</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" action="{{ route('custom-page.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="id" id="id" value="{{$row->id}}">

                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#english" role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-title">{{__('admin/app.english')}}</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#arabic" role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-title">{{__('admin/app.arabic')}}</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content py-3">
                                        <div class="tab-pane fade show active" id="english" role="tabpanel">
                                            <div class="col-md-12">
                                                <label for="name_en" class="form-label">{{ __('admin/app.name') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="name_en" class="form-control" value="{{$row->name_en}}" id="name_en" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_en" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text_en" name="title_en" class="form-control" value="{{$row->title_en}}" id="title_en" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_seo_en" class="form-label">{{ __('admin/app.title_seo') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="seo_title_en" class="form-control" value="{{$row->seo_title_en}}" id="title_seo_en" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="description_seo_en" class="form-label">{{ __('admin/app.description_seo') }} <span class="text-danger">*</span></label>
                                                <textarea type="text" name="seo_description_en" class="form-control"  id="description_seo_en" required>{{$row->seo_description_en}}</textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">{{ __('admin/app.tags') }}</label>
                                                <input type="text" name="seo_tags_en" value="{{$row->seo_tags_en}}" class="form-control" data-role="tagsinput">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="arabic" role="tabpanel">
                                            <div class="col-md-12">
                                                <label for="name_ar" class="form-label">{{ __('admin/app.name') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="name_ar" class="form-control" value="{{$row->name_ar}}" id="name_ar" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_ar" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text_ar" name="title_ar" class="form-control" value="{{$row->title_ar}}" id="title_ar" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_seo_ar" class="form-label">{{ __('admin/app.title_seo') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="seo_title_ar" class="form-control" value="{{$row->seo_title_ar}}" id="title_seo_ar" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="description_seo_ar" class="form-label">{{ __('admin/app.description_seo') }} <span class="text-danger">*</span></label>
                                                <textarea type="text" name="seo_description_ar" class="form-control" id="description_seo_en" required>{{$row->seo_description_ar}}</textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">{{ __('admin/app.tags_seo') }}</label>
                                                <input type="text" name="seo_tags_ar" value="{{$row->seo_tags_ar}}" class="form-control" data-role="tagsinput">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="{{$row->active}}" type="checkbox" id="flexSwitchCheckChecked"
                                                   {{$row->active?'checked':''}}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">{{__('admin/app.active')}}</label>
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
                                        <input type="file" class="form-control" name="photo" aria-label="file example" accept="image/*" >
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
<script>
    CKEDITOR.editorConfig = function( config ) {
    config.extraPlugins = 'imageuploader';
    };
    CKEDITOR.replace( 'text', );
    </script>
@endsection
