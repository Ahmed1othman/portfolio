@extends('layouts.admin.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">مجموع الخدمات</p>
                                <h4 class="my-1 text-white">{{\App\Models\Service::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">المميزات</p>
                                <h4 class="my-1 text-white">{{\App\Models\feature::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">عدد الطلبات</p>
                                <h4 class="my-1 text-white">{{\App\Models\order::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 bg-gradient-kyoto">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-dark">عدد المشاريع</p>
                                <h4 class="my-1 text-white">{{\App\Models\project::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">عدد الاخبار</p>
                                <h4 class="my-1 text-white">{{\App\Models\news::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
