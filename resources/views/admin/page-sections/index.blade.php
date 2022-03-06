@extends('layouts.admin.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-4 pull-right">
                        <a href="{{ route('create-page-section',$data->id) }}" class="btn btn-success"> {{ __('admin/app.add_new') }} <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('admin/app.name') }}</th>
                                <th>{{ __('admin/app.title') }}</th>
                                <th>{{ __('admin/app.active') }}</th>
                                <th>{{ __('admin/app.photo') }}</th>
                                <th>{{ __('admin/app.type') }}</th>
                                <th>{{ __('admin/app.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->sections as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->title}}</td>
                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success" aria-hidden="true"></i>':'<i class="bx bx-error text-danger" aria-hidden="true"></i>'!!}</td>
                                <td>
                                    @if ($row->image)
                                    <a href="{{asset($row->image)}}" data-fancybox="group2">
                                        <img width="75px" height="50px" src="{{asset($row->image)}}" alt="{{$row->title}}" class="">
                                    </a>
                                    @endif
                                </td>
                                <td>{{$row->type}}</td>
                                <td>
                                    <a href="{{route('page-sections.edit',$row->id)}}" class="btn btn-primary btn-sm">
                                        <i class="bx bx-edit" aria-hidden="true"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" onclick="delete_alert({{$row->id}},'page-sections')" ><i class="bx bx-trash"></i></button>
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
