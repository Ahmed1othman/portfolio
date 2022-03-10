@extends('layouts.admin.master')
@section('title')
    {{ __('admin/app.create_page_sections') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-body">
                <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">{{ __('admin/page_sections.create_page_sections') }}</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('page-sections.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="custom_id" value="{{$pageId}}">
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
                                                <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}" id="name_en" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_en" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="title_en" class="form-control" value="{{ old('title_en') }}" id="title_en" required>
                                            </div>

                                            <div id="section_type_content_translated_en">
                                               <div class="col-12"> <label for="text_en" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_en"></div> <textarea class="form-control ckeditor" name="text_en" placeholder="{{ __('admin/app.text') }}"></textarea> </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="arabic" role="tabpanel">
                                            <div class="col-md-12">
                                                <label for="name_ar" class="form-label">{{ __('admin/app.name') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') }}" id="name_ar" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_ar" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text_ar" name="title_ar" class="form-control" value="{{ old('title_ar') }}" id="title_ar" required>
                                            </div>

                                            <div id="section_type_content_translated_ar">
                                                <div class="col-12"> <label for="text_ar" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_ar"></div> <textarea class="form-control ckeditor" name="text_ar" placeholder="{{ __('admin/app.text') }}"></textarea> </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--active--}}
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        </div>
                                    </div>
                                    {{--section photo--}}
                                    <div class="col-12">
                                        <label for="photo" class="form-label">{{ __('admin/app.photo') }} </label>
                                        <input type="file" class="form-control" name="photo" aria-label="file example"  accept="image/*" >
                                    </div>
                                    <div class="col-md-12">
                                        <label for="order_view" class="form-label">{{ __('admin/app.order_view') }} <span class="text-danger"></span></label>
                                        <input type="number     " name="order_view" class="form-control" id="order_view" required></input>
                                    </div>
                                    {{--section type--}}
                                    <div class="col-md-12">
                                        <label for="type" class="form-label">{{ __('admin/page_sections.section_type') }} <span class="text-danger">*</span></label>
                                        <select class="form-select" aria-label="Default select example" id="type" name="type" onchange="showDiv(this)">
                                            <option value="text" selected>{{__('admin/page_sections.text')}}</option>
                                            <option value="gallery">{{__('admin/page_sections.gallery')}}</option>
                                            <option value="slider">{{__('admin/page_sections.slider')}}</option>
                                        </select>
                                    </div>

                                    <div id="section_type_content">

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

<script>
    function showDiv(element)
    {
         value = element.value;
         section_content = document.getElementById('section_type_content');
         section_content_translated_en = document.getElementById('section_type_content_translated_en');
         section_content_translated_ar = document.getElementById('section_type_content_translated_ar');
        section_content.innerHTML = '';
        section_content_translated_en.innerHTML = '';
        section_content_translated_ar.innerHTML = '';
        if(value == 'slider'){
                section_content.innerHTML = '<div class="col-12"> <label for="title" class="form-label">{{ __('admin/app.slider') }} <small>[choose one or more image]</small></label> <input type="file" class="form-control" name="slider[]" aria-label="file example"  accept="image/*" multiple> </div>';
                uploadFancy();
        }else if(value == 'gallery')
        {
            {{--gallery--}}
                section_content.innerHTML = '<div class="col-12"> <label for="title" class="form-label">{{ __('admin/app.gallery') }} <small>[choose one or more image]</small></label><input type="file" class="form-control" name="gallery[]" aria-label="file example"  accept="image/*" multiple> </div>';
            uploadFile();
        }
        else{
            section_content_translated_en.innerHTML ='<div class="col-12"> <label for="text_en" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_en"></div> <textarea class="form-control ckeditor" name="text_en" placeholder="{{ __('admin/app.text') }}"></textarea> </div>'
            section_content_translated_ar.innerHTML ='<div class="col-12"> <label for="text_ar" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_ar"></div> <textarea class="form-control ckeditor" name="text_ar" placeholder="{{ __('admin/app.text') }}"></textarea> </div>'
            function ckeditor(){
                CKEDITOR.replace( '.ckeditor',{
                } );
                CKEDITOR.add
            }
    }
    }
</script>
