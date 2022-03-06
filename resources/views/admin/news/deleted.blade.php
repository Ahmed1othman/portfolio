@extends('layouts.admin.master')
@section('title')
    {{trans('admin/news.Archive_news')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-header">
                    <p class="h5">ارشفه الاخبار</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th> {{trans('admin/news.title')}}</th>
                                <th> {{trans('admin/news.notes')}}</th>
                                <th> {{trans('admin/news.active')}}</th>
                                <th> {{trans('admin/news.photo')}}</th>
                                <th> {{trans('admin/news.photo')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $row)
                                <tr id="row_{{$row->id}}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->notes}}</td>
                                    <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success" aria-hidden="true"></i>':'<i class="bx bx-error text-danger" aria-hidden="true"></i>'!!}</td>
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
                                                onclick="reset_alert({{$row->id}},'news')"><i
                                                class="bx bx-refresh"></i></button>


                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                                onclick="delete_alert({{$row->id}},'news')"><i class="bx bx-trash"></i>
                                        </button>
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
