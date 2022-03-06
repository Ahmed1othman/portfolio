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
								<form class="row g-3" action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="col-md-12">
										<label for="title" class="form-label">{{ __('admin/app.title') }}</label>
										<input type="text" name="title" class="form-control" id="title">
									</div>

									<div class="col-12">
										<label for="text" class="form-label">{{ __('admin/app.text') }}</label>
										<textarea class="form-control" name="text"  id="text" placeholder="{{ __('admin/app.text') }}"></textarea>
									</div>
									<div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="active" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <input type="file" class="form-control" name="photo" aria-label="file example" required accept="image/*" >
									</div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary px-5">{{ __('admin/app.save') }}</button>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
