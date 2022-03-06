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


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection