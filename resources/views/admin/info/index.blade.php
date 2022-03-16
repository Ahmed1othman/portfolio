@extends('layouts.admin.master')
@section('title')
{{ __('admin/app.create_navbar') }}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">

            <div class="card-body">

                @foreach ($data as $row)
                <form class="kt-form" id="kt_form" method="post" action="{{route('info.update',[$row->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                    <div class="row">
                        <div class="col-xl-2">
                            <div class="form-group">
                                <label>{{__('admin/app.'.$row->option)}}</label>
                                <input type="hidden" name="option" value="{{$row->option}}">
                            </div>
                        </div>
                        @if ($row->type=='image')
                        <div class="col-xl-2">
                            <div class="form-group">
                                @if (!empty($row->value))
                                <img style="height: 100px;width: 120px;"
                                    src="{{ asset('storage/front/'.$row->value ) }}">
                                @endif

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="value" accept="image/*">
                            </div>
                        </div>
                        @elseif ($row->type=='string')
                        <div class="col-xl-8">
                            <div class="form-group">
                                <input type="text" class="form-control" name="value" required
                                    placeholder="{{__('admin/app.'.$row->option)}}"
                                    value="{{ old('value', $row->value  ) }}">
                            </div>
                        </div>
                        @elseif ($row->type=='pdf')
                        <div class="col-xl-8">
                            <div class="form-group">
                                <input type="file" class="form-control" name="value" accept="application/pdf">
                            </div>
                        </div>

                        @elseif ($row->type=='color')
                            <div class="col-xl-8">
                                <div class="form-group">
                                    <input type="text" class="coloris form-control" name="value" value="{{old('value',$row->value)}}" data-coloris style="text-align: left"/>
                                </div>
                            </div>
                        @elseif ($row->type=='checkbox'&&$row->option == 'show_logo')
                            <div class="col-xl-8">
                                <div class="form-group">
                                    <input class="form-check-input" name="show_logo" value="1" type="checkbox"
                                           id="flexSwitchCheckChecked" {{ $row->value == true ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">{{__('admin/app.show_logo')}}</label>
                                </div>
                            </div>



                        @elseif ($row->type=='text')
                        <div class="col-xl-8">
                            <div class="form-group">
                                <textarea id="{{ $row->option }}" name="value" class="form-control ckeditor" rows="3" placeholder="{{__('admin/app.about_us')}}">{{ $row->value }}</textarea>
                            </div>
                        </div>
                        @endif
                        <div class="col-xl-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">{{__('admin/app.update')}}</button>
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
@endsection

@section('js')
    <script>
        Coloris({
            el: '.coloris',
            format: 'hex',
            themeMode: 'light', // light, dark, auto
            content:'div',
        });
    </script>
@endsection
