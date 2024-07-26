@extends('template.master')
@section('title','Customer Page')
@section('heading','Selamat Datang Di Halaman Customer anda')

@section('add')
<div class="nk-block-head-content">
    <div class="toggle-wrap nk-block-tools-toggle">
        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
        <div class="toggle-expand-content" data-content="pageMenu">
            <ul class="nk-block-tools g-3">
                <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                <li class="nk-block-tools-opt">
                    <div class="drodown">
                        <a href="{{ route('customers.create') }}" class="dropdown-toggle btn btn-icon btn-primary" ><em class="icon ni ni-plus"></em></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Customer List | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.0">
</head>
<body class="nk-body ui-rounder has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <!-- .nk-block-head-content -->
                                    <!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner position-relative card-tools-toggle">
                                            <!-- .card-title-group -->
                                            <div class="card-search search-wrap" data-search="search">
                                                <div class="card-body">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name">
                                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div>
                                            </div><!-- .card-search -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check"></div>
                                                    <div class="nk-tb-col"><span class="sub-text">Nama</span></div>
                                                    <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">No Hp</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Alamat</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span class="sub-text">Metode Pembayaran</span></div>
                                                    <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Property</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></div>
                                                    <div class="nk-tb-col text-end"><span class="sub-text">Actions</span></div>
                                                </div>
                
                                                @foreach ($customers as $customer)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="cid{{ $customer->id }}">
                                                            <label class="custom-control-label" for="cid{{ $customer->id }}"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <a href="{{ route('customers.show', $customer->id) }}">
                                                            <div class="user-card">
                                                                <div class="user-avatar xs bg-primary">
                                                                    <span>{{ substr($customer->nama, 0, 2) }}</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">{{ $customer->nama }}<span class="dot dot-success d-lg-none ms-1"></span></span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="sub-text">{{ $customer->email }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="sub-text">{{ $customer->no_hp }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="sub-text">{{ $customer->alamat }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <div class="icon-text">
                                                            <span class="sub-text">{{ $customer->metode_pembayaran }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="sub-text">{{ $customer->jenis_property }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-status text-success">{{ $customer->status }}</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Details">
                                                                    <em class="icon ni ni-eye-fill"></em>
                                                                </a>
                                                            </li>
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                    <em class="icon ni ni-mail-fill"></em>
                                                                </a>
                                                            </li>
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                    <em class="icon ni ni-cross-fill-c"></em>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="{{ route('customers.show', $customer->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Mail</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-cart"></em><span>Orders</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach<!-- .nk-tb-list -->
                                        </div><!-- .card-inner -->
                                    
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
   <!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.0"></script>
    <script src="./assets/js/scripts.js?ver=3.2.0"></script>
</body>
</html>
@endsection