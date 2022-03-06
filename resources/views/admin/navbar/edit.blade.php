@extends('layouts.admin.master')
@section('title')
{{ __('admin/app.create_navbar') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-7 mx-auto">
                        <h6 class="mb-0 text-uppercase">{{ __('admin/app.create_navbar') }}</h6>
                        <hr />
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" action="{{ route('navbar.update',$row->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="_method" value="PUT">

                                    <input type="hidden" name="id" id="id" value="{{$row->id}}">

                                    <div class="col-md-12">
                                        <label for="title" class="form-label">{{ __('admin/app.title') }}</label>
                                        <input type="text" name="title" value="{{$row->title}}" class="form-control"
                                            id="title">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="1" type="checkbox"
                                                id="flexSwitchCheckChecked" {{ $row->active==1?'checked':'' }}>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary px-5">{{ __('admin/app.save') }}</button>
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