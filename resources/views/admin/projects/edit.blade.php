@extends('layouts.admin.master')
@section('title')
{{trans('admin/projects.Edit_project')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-body">
                <form action="{{route('projects.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}">


                    <div class="row">

                        <div class="col">
                            <label class="mb-2">{{trans('admin/services.project_name')}}</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $data->getTranslation('title', 'en') }}}">
                            @error('title')
                            <div class="alert alert-danger">{{$Message}}</div>
                            @enderror
                        </div>


                        <div class="col">
                            <label class="mb-2">{{trans('admin/services.project_name_ar')}}</label>
                            <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{ $data->getTranslation('title', 'ar') }}}">
                            @error('title_ar')
                            <div class="alert alert-danger">{{$Message}}</div>
                            @enderror
                        </div>

                    </div>

                    <br>



                    <div class="row">
                        <div class="col">
                            <label class="mb-2">{{ trans('admin/services.project_notes') }}</label>
                            <textarea class="form-control ckeditor"  rows="5" name="notes"> {{ $data->getTranslation('notes', 'en') }} </textarea>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="mb-2">{{ trans('admin/services.project_notes_ar') }}</label>
                            <textarea class="form-control ckeditor" rows="5" name="notes_ar"> {{ $data->getTranslation('notes', 'ar') }} </textarea>
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            @if ($data->image)
                            <a href="{{asset($data->image)}}" data-fancybox="group2">
                                <img width="75px" height="75px" src="{{asset($data->image)}}" alt="{{$data->title}}" class="">
                            </a>
                            @endif

                            <p class="text-danger">* {{trans('admin/projects.Attachments_are_of_image_type_only')}}</p>
                            <h6 class="mb-0 text-uppercase">{{trans('admin/projects.Attachments')}}</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">
                                    <input id="image-uploadify" name="photo" type="file" accept="image/*">
                                </div>
                            </div>
                        </div>

                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" {{$data->active==1?'checked':''}}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">{{trans('admin/projects.Edit_project')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
