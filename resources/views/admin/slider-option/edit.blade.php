@extends('layouts.admin.master')
@section('title')
    {{trans('admin/app.slider-option')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <form action="{{route('save-slider-option')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf



                        <div class="row">

                            <div class="col">
                                <label class="mb-2">{{trans('admin/app.photo')}}</label>
                                <select class="form-control" name="image">
                                    <option value="slidingoverlayhorizontal">{{ __('admin/app.slidingoverlayhorizontal') }} </option>
                                    <option value="slidingoverlayvertical">{{ __('admin/app.slidingoverlayvertical') }} </option>
                                    <option value="boxslide"> {{ __('admin/app.boxslide') }}</option>
                                </select>
                                     @error('image')
                                <div class="alert alert-danger">{{$Message}}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="mb-2">{{trans('admin/app.word')}}</label>
                                <select class="form-control" name="word">
                                          <option value="x:right"> {{ __('admin/app.x:right') }}</option>
                                          <option value="x:left"> {{ __('admin/app.x:left') }}</option>
                                          <option value="y:top"> {{ __('admin/app.y:top') }}</option>
                                          <option value="y:bottom"> {{ __('admin/app.y:bottom') }}</option>
                                </select>
                                     @error('word')
                                <div class="alert alert-danger">{{$Message}}</div>
                                @enderror
                            </div>




                        </div>

                        <br>





                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">  {{trans('admin/app.save')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
