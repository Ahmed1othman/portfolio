@extends('layouts.admin.master')
@section('title')
{{trans('admin/projects.Add_new_project')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-body">
                <form action="{{route('projects.store')}}" method="post" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf


                     <div class="row">

                         <div class="col">
                             <label class="mb-2">{{trans('admin/projects.project_name')}}</label>
                             <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" required value="{{old('title')}}">
                             @error('title')
                             <div class="alert alert-danger">{{$message}}</div>
                             @enderror
                         </div>

                         <div class="col">
                             <label class="mb-2">{{trans('admin/projects.project_name_ar')}}</label>
                             <input type="text" name="title_ar" class="form-control  @error('title_ar') is-invalid @enderror" required value="{{old('title_ar')}}">
                             @error('title_ar')
                             <div class="alert alert-danger">{{$message}}</div>
                             @enderror
                         </div>

                     </div>

                     <br>


                     <div class="row">
                         <div class="col">
                             <label class="mb-2">{{trans('admin/projects.project_notes')}}</label>
                             <textarea class="form-control ckeditor @error('notes') is-invalid @enderror" rows="5" name="notes" required> {{old('notes')}} </textarea>
                             @error('notes')
                             <div class="alert alert-danger">{{$message}}</div>
                             @enderror
                         </div>
                     </div>

                     <br>
                     <div class="row">
                         <div class="col">
                             <label class="mb-2">{{trans('admin/projects.project_notes_ar')}}</label>
                             <textarea class="form-control  ckeditor @error('notes_ar') is-invalid @enderror" rows="5" name="notes_ar" required> {{old('notes_ar')}} </textarea>
                             @error('notes_ar')
                             <div class="alert alert-danger">{{$message}}</div>
                             @enderror
                         </div>
                     </div>




                    <br>

                    <br>

                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <p class="text-danger">* {{trans('admin/projects.Attachments_are_of_image_type_only')}}</p>
                            <h6 class="mb-0 text-uppercase">{{trans('admin/projects.Attachments')}}</h6>
                            <hr />
                            <div class="card">
                                <div class="card-body">
                                    <input id="image-uploadify" name="photo" type="file" accept="image/*" required>
                                </div>
                            </div>
                        </div>

                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="active" value="1" type="checkbox"
                                    id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success"> {{trans('admin/projects.Add_new_project')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
