@extends('layouts.website.master')
@section('title')
   {{ $row->title }}
@endsection
@section('content')
<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-08.jpg);">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            {{ $row->title}}
        </h2>

        <div class="flex-wr-c-c">
            <a href="{{ route('home') }}" class="breadcrumb-item">
                {{ __('site/app.home') }}
            </a>

            <span class="breadcrumb-item">
                {{$row->title}}
            </span>
        </div>
    </div>
</section>
<section class="bg-0 p-t-84 p-b-100">
    <div class="container">
        <div class="flex-wr-sb-c bo-b-1 bcl-12 p-b-12 m-b-24">
            <h3 class="t1-b-3 cl-3 m-r-30 m-tb-10">
                {{ $row->title }}
            </h3>

        </div>

        <div class="row">

            <div class="col-md-12 p-b-30">

                    {!! $row->text !!}
            </div>
            <div class="col-12 p-b-20">
                @if($row->image)
                <img class="max-s-full m-b-30" src="{{ asset($row->image) }}" alt="{{ $row->title }}">
                @endif
            </div>

        </div>

    </div>
</section>

@endsection
