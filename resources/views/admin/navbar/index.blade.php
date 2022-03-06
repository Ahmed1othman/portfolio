@extends('layouts.admin.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 text-centerr">
                        <h2> {{ __('admin/app.navbar') }} </h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin/app.title') }}</th>
                                <th>{{ __('admin/app.active') }}</th>
                                <th>{{ __('admin/app.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>
                                <td>{!! $row->active==1?'<i class="lni lni-checkmark text-success"
                                        aria-hidden="true"></i>':'<i class="lni lni-close text-danger"
                                        aria-hidden="true"></i>'!!}</td>
                                <td>
                                    <a href="{{route('navbar.edit',$row->id)}}" class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit" aria-hidden="true"></i>
                                    </a>
                                </td>
                                @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection