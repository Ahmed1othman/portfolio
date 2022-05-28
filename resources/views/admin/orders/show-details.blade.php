@extends('layouts.admin.master')
@section('title')
    {{trans('admin/contact-us.details')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('AllOrders')}}" class="btn btn-primary">{{__('admin/app.back')}}</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.name')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$order->name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.email')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$order->email}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.phone')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$order->phone}}" />
                            </div>
                        </div>

                        <hr>


{{--                        <form action="{{ route('contact-us.update','orders') }}" method="post" autocomplete="off" enctype="multipart/form-data">--}}
{{--                            @method('PUT')--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="id" value="{{ $order->id }}">--}}
{{--                            <div class="row mb-3">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">{{__('admin/app.notes')}}</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    <textarea class="form-control"  name="note">{{$order->note}}</textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3"></div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    <input type="submit" class="btn btn-primary px-4" value="{{__('admin/app.save_note')}}" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
