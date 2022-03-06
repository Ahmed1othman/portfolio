@extends('layouts.admin.master')
@section('title')
تواصل معنا
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
                                <th>{{ __('admin/app.name') }}</th>
                                <th>{{ __('admin/app.email') }}</th>
                                <th>{{ __('admin/app.phone') }}</th>
                                <th>{{ __('admin/app.message') }}</th>
                                <th>{{ __('admin/app.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->msg}}</td>
                                <td>
                                    <form action="{{route('deleteddata')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$row->id}}">
                                        <button class="btn btn-danger btn-sm waves-effect waves-light"><i
                                                class="bx bx-trash"></i></button>
                                    </form>
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