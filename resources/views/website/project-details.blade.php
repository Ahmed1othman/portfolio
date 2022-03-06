@extends('layouts.website.master')
@section('title')
   projects details
@endsection
@section('content')
<section class="bg-img1 kit-overlay1" style="background-image: url({{ asset('storage/front/'.websiteInfo_hlp('projects_image')) }});">
    <div class="container size-h-3 p-tb-30 flex-col-c-c">
        <h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
            {{ __('site/app.projects') }}

        </h2>

        <div class="flex-wr-c-c">
            <a href="{{ route('home') }}" class="breadcrumb-item">
                {{ __('site/app.home') }}
            </a>
            <a href="{{ route('siteprojects') }}" class="breadcrumb-item">
                {{ __('site/app.projects') }}
            </a>
            <span class="breadcrumb-item">
                {{__('site/app.project_details')}}
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
                <div>
                    <p class="t1-s-2 cl-6 m-b-12">
                         {!! $row->notes !!}
                    </p>


                </div>
            </div>
            <div class="col-12 p-b-20">
                <img class="max-s-full m-b-30 img-thumbnail" src="{{ asset($row->image) }}" alt="IMG" style="width: 350px; height: 350px">
            </div>

        </div>

    </div>
</section>

@endsection
