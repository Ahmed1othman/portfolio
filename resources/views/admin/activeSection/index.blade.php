@extends('layouts.admin.master')
@section('title')
    {{ __('admin/app.create_slider') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">
                <div class="row">
					<div class="col-xl-7 mx-auto">
						<h6 class="mb-0 text-uppercase">{{ __('admin/app.create_slider') }}</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
                                @foreach ($data as $row)

                                <form class="kt-form" id="kt_form" method="post" action="{{route('info.update',[$row->id])}}"   enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                                    <div class="row">
                                            <div class="col-xl-4">
                                                <label class="form-check-label" >{{ __('admin/app.'.$row->section_name) }}</label>
                                            </div>
                                            <div class="col-xl-6 text-left">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="secttion_id_{{ $row->id }}" {{ $row->active==1?'checked':'' }} onclick="activeSection({{ $row->id }})">
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                    <hr>
                                    @endforeach

							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

