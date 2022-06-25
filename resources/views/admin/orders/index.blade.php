@extends('layouts.admin.master')
@section('title')
    {{__('admin/orders.orders')}}
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
                                <th>{{trans('admin/orders.name')}}</th>
                                <th>{{trans('admin/orders.email')}}</th>
                                <th>{{trans('admin/orders.phone')}}</th>
                                <th>{{trans('admin/orders.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($Orders as $row)
                                <tr id="row_{{$row->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>
                                        <form action="{{route('deletedOrders')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$row->id}}">
                                            <button class="btn btn-danger btn-sm waves-effect waves-light"><i class="bx bx-trash"></i></button>
                                            <a href="{{route('orders.show',$row->id)}}" class="btn btn-success btn-sm waves-effect waves-light"><i class="bx bx-show"></i></a>
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
