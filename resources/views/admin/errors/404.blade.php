@extends('layouts.admin.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="error-404 d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="card py-5">
                        <div class="row g-0">
                            <div class="col col-xl-5">
                                <div class="card-body p-4">
                                    <h1 class="display-1"><span class="text-primary">4</span><span class="text-danger">0</span><span class="text-success">4</span></h1>
                                    <h2 class="font-weight-bold display-4">{{__('admin/app.page_not_found')}}</h2>
                                    <p>
                                        <br>{{__('admin/app.the_page_you_requested_could_not_be_found')}}
                                        <br>{{__('admin/app.dont_worry_and_return_to_the_previous_page')}}</p>
                                    <div class="mt-5"> <a href="{{route('admin')}}" class="btn btn-primary btn-lg px-md-5 radius-30">{{__('admin/app.go_home')}}</a>
                                        <a href="{{url()->previous()}}" class="btn btn-outline-dark btn-lg ms-3 px-md-5 radius-30">{{__('admin/app.back')}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <img src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/03/shutterstock_1338315902.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <div class="bg-white p-3 fixed-bottom border-top shadow">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">Follow Us :</li>
                        <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-facebook me-1'></i>Facebook</a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-twitter me-1'></i>Twitter</a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-google me-1'></i>Google</a>
                        </li>
                    </ul>
                    <p class="mb-0">Copyright © 2021. All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
