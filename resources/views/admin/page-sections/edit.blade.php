@extends('layouts.admin.master')
@section('title')
    {{ __('admin/app.create_page-sections') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">
                <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">{{ __('admin/app.create_page-sections') }}</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3" action="{{ route('page-sections.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
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
                                                <input type="text" name="name_en" class="form-control" value="{{ $row->name_en }}" id="name_en" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_en" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="title_en" class="form-control" value="{{ $row->title_en}}" id="title_en" required>
                                            </div>

                                            @if($row->type == 'text')
                                            <div id="section_type_content_translated_en">
                                                <div class="col-12"> <label for="text_en" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_en"></div> <textarea class="form-control ckeditor" name="text_en" placeholder="{{ __('admin/app.text') }}">{{ $row->text_en}}</textarea> </div>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="arabic" role="tabpanel">
                                            <div class="col-md-12">
                                                <label for="name_ar" class="form-label">{{ __('admin/app.name') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="name_ar" class="form-control" value="{{ $row->name_en}}" id="name_ar" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="title_ar" class="form-label">{{ __('admin/app.title') }} <span class="text-danger">*</span></label>
                                                <input type="text" name="title_ar" class="form-control" value="{{ $row->title_ar}}" id="title_ar" required>
                                            </div>

                                            @if($row->type == 'text')
                                            <div id="section_type_content_translated_ar">
                                                <div class="col-12"> <label for="text_ar" class="form-label">{{ __('admin/app.text') }}</label><div id="toolbar-container_ar"></div> <textarea class="form-control ckeditor" name="text_ar" placeholder="{{ __('admin/app.text') }}">{{ $row->text_ar}}</textarea> </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    {{--active--}}
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" {{$row->active?'checked':''}}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">{{__('admin/app.active')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="order_view" class="form-label">{{ __('admin/app.order_view') }} <span class="text-danger"></span></label>
                                        <input type="number" value="{{$row->order_view}}" name="order_view" class="form-control" id="order_view" required>
                                    </div>

									<div class="col-lg-4">
                                        @if ($row->image)
                                        <a href="{{asset($row->image)}}" data-fancybox="group2">
                                            <img width="120px" height="120px" src="{{asset($row->image)}}" alt="{{$row->title}}" class="img-fluid rounded">
                                        </a>
                                        @endif
                                    </div>
									<div class="col-lg-8">
                                        <input type="file" class="form-control" name="photo" aria-label="file example" accept="image/*" >
									</div>

                                    @if($row->type == 'gallery')
                                        <div class="col-12"> <label for="title" class="form-label">{{ __('admin/app.gallery') }} <small>[{{__('admin/app.choose_one_or_more_image')}}]</small></label><input type="file" class="form-control" name="gallery[]" aria-label="file example"  accept="image/*" multiple> </div>
                                        <div class="row row-cols-auto g-3 align-items-center">
                                            @foreach($row->content as $img)
                                            <div class="col">
                                                <img src="{{asset('storage/page-sections/'.$img )}}" style="height: 120px;width: 130px"  alt="..." class="img-thumbnail img-fluid rounded">
                                            </div>
                                            @endforeach
                                        </div>
                                        <!--end row-->
                                    @endif

                                    @if($row->type == 'slider')
                                        <div class="col-12"> <label for="title" class="form-label">{{ __('admin/app.slider') }} <small>[{{__('admin/app.choose_one_or_more_image')}}]</small></label><input type="file" class="form-control" name="slider[]" aria-label="file example"  accept="image/*" multiple> </div>
                                        <div class="card">
                                                        <div class="card-body">
                                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                                <ol class="carousel-indicators">
                                                                    @for($i = 0;count($row->content)>$i;$i++)
                                                                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="{{$i==0?'active':''}}"></li>
                                                                    @endfor
                                                                </ol>
                                                                <div class="carousel-inner">
                                                                    @foreach($row->content as $img)
                                                                    <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
                                                                        <img src="{{asset('storage/page-sections/'.$img )}}" class="d-block w-100" alt="..." style="height: 250px">
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                    @endif

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
