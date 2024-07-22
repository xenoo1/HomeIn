@extends('template.master')
@section('title','Orderlist Page')
@section('heading','Selamat Datang Di Halaman Penjualan')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Order History - With Action</h4>
            <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p>
        </div>
    </div>
    <div class="card card-preview">
        <table class="table table-orders">
            <thead class="tb-odr-head bg-light bg-opacity-75">
                <tr class="tb-odr-item">
                    <th class="tb-odr-info">
                        <span class="tb-odr-id">Order ID</span>
                        <span class="tb-odr-date d-none d-md-inline-block">Date</span>
                    </th>
                    <th class="tb-odr-amount">
                        <span class="tb-odr-total">Amount</span>
                        <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                    </th>
                    <th class="tb-odr-action">&nbsp;</th>
                </tr>
            </thead>
            <tbody class="tb-odr-body">
                <tr class="tb-odr-item">
                    <td class="tb-odr-info">
                        <span class="tb-odr-id"><a href="#">#746F5K2</a></span>
                        <span class="tb-odr-date">23 Jan 2019, 10:45pm</span>
                    </td>
                    <td class="tb-odr-amount">
                        <span class="tb-odr-total">
                            <span class="amount">$2300.00</span>
                        </span>
                        <span class="tb-odr-status">
                            <span class="badge badge-dot bg-success">Complete</span>
                        </span>
                    </td>
                    <td class="tb-odr-action">
                        <div class="tb-odr-btns d-none d-md-inline">
                            <a href="#" class="btn btn-sm btn-primary">View</a>
                        </div>
                        <div class="dropdown">
                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                <ul class="link-list-plain">
                                    <li><a href="#" class="text-primary">Edit</a></li>
                                    <li><a href="#" class="text-primary">View</a></li>
                                    <li><a href="#" class="text-danger">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div><!-- .card -->
</div>   
@endsection

@section('css')
    
@endsection