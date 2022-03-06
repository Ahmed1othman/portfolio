@extends('layouts.admin.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')

        <div class="card">
     
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin/app.email') }}</th>
                                <th>{{ __('admin/app.active') }}</th>
                                <th>{{ __('admin/app.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->email}}</td>

                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success" aria-hidden="true"></i>':'<i class="bx bx-error text-danger" aria-hidden="true"></i>'!!}</td>

                                <td>

                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" onclick="delete_alert({{$row->id}},'subscription')" ><i class="bx bx-trash"></i></button>
                                </td>
                            </tr>
                              @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
