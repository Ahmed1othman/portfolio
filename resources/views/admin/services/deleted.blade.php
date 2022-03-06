@extends('layouts.admin.master')
@section('title')
{{trans('admin/services.Archive_Services')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-header">
                <p class="h5 text-primary"> {{trans('admin/services.Archive_Services')}}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/services.title')}}</th>
                                <th>{{trans('admin/services.notes')}}</th>
                                <th>{{trans('admin/services.active')}}</th>
                                <th>{{trans('admin/services.photo')}}</th>
                                <th>{{trans('admin/services.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Services as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->notes}}</td>
                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success"
                                        aria-hidden="true"></i>':'<i class="bx bx-error text-danger"
                                        aria-hidden="true"></i>'!!}</td>
                                <td>
                                    @if ($row->image)
                                    <a href="{{asset($row->image)}}" data-fancybox="group2">
                                        <img width="75px" height="75px" src="{{asset($row->image)}}"
                                            alt="{{$row->title}}" class="">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"
                                        onclick="reset_alert({{$row->id}},'Services')"><i
                                            class="bx bx-refresh"></i></button>

                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                        onclick="delete_alert({{$row->id}},'Services')"><i
                                            class="bx bx-trash"></i></button>
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