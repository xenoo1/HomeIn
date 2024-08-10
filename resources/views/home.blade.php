@extends('template.master')

@section('content')
<div class="nk-app-root">
    <div class="nk-content-body">
        <div class="components-preview wide-xl mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <!-- Display total customers dynamically -->
                                                    <span class="fs-2 me-1">{{ $customerCount }}</span>
                                                    
                                                </div>
                                                <h6 class="text-white">Total Customers</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                            <li><a href="#"><span>3 Months</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-cmwg1-ck mt-auto">
                                        <canvas class="campaign-line-chart-s1 rounded-bottom" id="runningCampaign"></canvas>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <!-- Display total properties dynamically -->
                                                    <span class="fs-2 me-1">{{ $propertyCount }}</span>
                                                    
                                                </div>
                                                <h6 class="text-white">Total Properties</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-sm btn-trigger on-dark" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                            <li><a href="#"><span>3 Months</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-cmwg1-ck mt-auto">
                                        <canvas class="campaign-line-chart-s1 rounded-bottom" id="runningCampaign"></canvas>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div>
                  
                    </div><!-- .row -->
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
