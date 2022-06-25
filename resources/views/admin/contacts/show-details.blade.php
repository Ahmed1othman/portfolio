@extends('layouts.admin.master')
@section('title')
    {{trans('admin/app.contact_us_details')}}

@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('contacts')}}" class="btn btn-primary">{{__('admin/app.back')}}</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.name')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$contact->name}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.email')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$contact->email}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.phone')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$contact->phone}}" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.created_at')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control"  disabled readonly value="{{$contact->created_at->diffforhumans()}}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">{{__('admin/app.msg')}}</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea class="form-control" disabled readonly>{{$contact->msg}}</textarea>
                            </div>
                        </div>
                        <hr>


{{--                        <form action="{{ route('orders.update','orders') }}" method="post" autocomplete="off"--}}
{{--                              enctype="multipart/form-data">--}}
{{--                            @method('PUT')--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="id" value="{{ $contact->id }}">--}}
{{--                            <div class="row mb-3">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <h6 class="mb-0">{{__('admin/app.notes')}}</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9 text-secondary">--}}
{{--                                    <textarea class="form-control"  name="note">{{$contact->note}}</textarea>--}}
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
