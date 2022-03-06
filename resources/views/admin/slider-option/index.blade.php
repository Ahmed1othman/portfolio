@extends('layouts.admin.master')
@section('title')
    {{trans('admin/slider-option.slider-option')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/app.photo')}}</th>
                                <th>{{trans('admin/app.word')}}</th>
                                <th>{{trans('admin/app.action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{__('admin/app.'.$row->image)}}</td>
                                <td>{{__('admin/app.'.$row->word)}}</td>
                                <td>
                                    <a href="{{route('update-slider-option')}}" class="btn btn-success btn-sm"><i class='bx bx-edit'></i></a>
                                  </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
