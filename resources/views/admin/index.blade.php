@extends('layouts.admin.master')
@section('title')
    {{__('admin/app.homepage')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">{{__('admin/app.total_services')}}</p>
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
                                <p class="mb-0 text-white">{{__('admin/app.total_features')}}</p>
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
                                <p class="mb-0 text-white">{{__('admin/app.total_contacts')}}</p>
                                <h4 class="my-1 text-white">{{\App\Models\ContactUs::count()}}</h4>
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
                                <p class="mb-0 text-white">{{__('admin/app.total_subscriptions')}}</p>
                                <h4 class="my-1 text-white">{{\App\Models\Subscription::count()}}</h4>
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
                                <p class="mb-0 text-white">{{__('admin/app.total_orders')}}</p>
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
                                <p class="mb-0 text-dark">{{__('admin/app.total_projects')}}</p>
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
                                <p class="mb-0 text-white">{{__('admin/app.total_news')}}</p>
                                <h4 class="my-1 text-white">{{\App\Models\news::count()}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-moonlit">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-0 text-white">{{__('admin/app.total_visitors')}}</p>
                                <h4 class="my-1 text-white">{{\App\Models\visitor::sum('count')}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h3>statistics</h3>
            <div class="center align-content-center center-block">
                <div id="chart-visitors">

                </div>
            </div>

        </div>

    </div>
</div>
@endsection


@push('js')
    <script>
        var options = {
            series: [{
                name: "Visitors",
                data: @json($visitors->pluck('views')->toArray())
            }],
            chart: {
                type: 'area',
                height: 400,
                width:"100%",
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },

            title: {
                text: 'Analysis of Number Visitors per day',
                align: 'left'
            },
            subtitle: {
                text: 'last 30 days',
                align: 'left'
            },
            labels: @json($visitors->pluck('day')->toArray()),
            xaxis: {
                type: 'datetime',
            },
            yaxis: {
                opposite: true
            },
            legend: {
                horizontalAlign: 'left'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-visitors"), options);
            chart.render();

    </script>
@endpush
