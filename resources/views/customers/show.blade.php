@extends('template.master');
@section('title','Customer Details')
@section('heading','Selamat Datang Di Manajemen Properti anda')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block">
                <div class="row g-gs">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-inner-group">
                                <div class="card-inner">
                                    <div class="user-card user-card-s2">
                                        <div class="user-avatar lg bg-primary">
                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                        </div>
                                        <div class="user-info">
                                            <div class="badge bg-light rounded-pill ucap">Platinam</div>
                                            <h5>Francis Mitcham</h5>
                                            <span class="sub-text">info@softnio.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner card-inner-sm">
                                    <ul class="btn-toolbar justify-center gx-1">
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner">
                                    <div class="row gy-3 justify-content-center text-center">
                                        <div class="col">
                                            <div class="profile-stats">
                                                <span class="amount">23</span>
                                                <span class="sub-text">Orders</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="profile-stats">
                                                <span class="amount">20</span>
                                                <span class="sub-text">Completed</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="profile-stats">
                                                <span class="amount">3</span>
                                                <span class="sub-text">Progress</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <h6 class="overline-title mb-2">Short Details</h6>
                                    <div class="row g-3">
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">User ID:</span>
                                            <span>UD003054</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Billing Email:</span>
                                            <span>billing@softnio.com</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Billing Address:</span>
                                            <span>551 Swanston Street, Melbourne <br /> Victoria 3053 Australia</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Language:</span>
                                            <span>English, France</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Last Login:</span>
                                            <span>15 Feb, 2019 01:02 PM</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">KYC Status:</span>
                                            <span class="lead-text text-success">Approved</span>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl-12">
                                            <span class="sub-text">Register At:</span>
                                            <span>Nov 24, 2019</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="overline-title-alt mb-2 mt-2">In Account</div>
                                    <div class="profile-balance">
                                        <div class="profile-balance-group gx-4">
                                            <div class="profile-balance-sub">
                                                <div class="profile-balance-amount">
                                                    <div class="number">237.89 <small class="currency currency-usd">USD</small></div>
                                                </div>
                                                <div class="profile-balance-subtitle">Wallet Balance</div>
                                            </div>
                                            <div class="profile-balance-sub">
                                                <span class="profile-balance-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                                <div class="profile-balance-amount">
                                                    <div class="number">1,643</div>
                                                </div>
                                                <div class="profile-balance-subtitle">Credit Points</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <h6 class="lead-text mb-3">Recent Orders</h6>
                                    <div class="nk-tb-list nk-tb-ulist is-compact card">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Order ID</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="sub-text">Product Name</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="sub-text">Total Price</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Status</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Delivery</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4947</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/c.png" alt="" class="thumb">
                                                    <span class="title">Black Mi Band Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$ 89.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-warning">Shipped</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">In 2 days</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4948</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/b.png" alt="" class="thumb">
                                                    <span class="title">Purple Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$299.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-success">Delivered</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">12 Dec, 2020</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4949</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/a.png" alt="" class="thumb">
                                                    <span class="title">Pink Fitness Tracker</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$99.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-danger">Canceled</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Never</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <h6 class="lead-text mb-3">Complete Orders</h6>
                                    <div class="nk-tb-list nk-tb-ulist is-compact card">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Order ID</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="sub-text">Product Name</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="sub-text">Total Price</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Status</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Delivery</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4947</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/c.png" alt="" class="thumb">
                                                    <span class="title">Black Mi Band Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$ 89.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-warning">Shipped</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">In 2 days</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4948</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/b.png" alt="" class="thumb">
                                                    <span class="title">Purple Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$299.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-success">Delivered</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">12 Dec, 2020</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4949</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/a.png" alt="" class="thumb">
                                                    <span class="title">Pink Fitness Tracker</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$99.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-danger">Canceled</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Never</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <h6 class="lead-text mb-3">Progress Orders</h6>
                                    <div class="nk-tb-list nk-tb-ulist is-compact card">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Order ID</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="sub-text">Product Name</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="sub-text">Total Price</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Status</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Delivery</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4947</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/c.png" alt="" class="thumb">
                                                    <span class="title">Black Mi Band Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$ 89.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-warning">Shipped</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">In 2 days</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4948</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/b.png" alt="" class="thumb">
                                                    <span class="title">Purple Smartwatch</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$299.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-success">Delivered</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">12 Dec, 2020</span>
                                            </div>
                                        </div>
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <a href="#"><span class="fw-bold">#4949</span></a>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span class="tb-product">
                                                    <img src="./images/product/a.png" alt="" class="thumb">
                                                    <span class="title">Pink Fitness Tracker</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span class="amount">$99.49</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text text-danger">Canceled</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="sub-text">Never</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <h6 class="lead-text mb-3">Support Messages</h6>
                                    <div class="card card-bordered">
                                        <table class="table table-plain">
                                            <thead>
                                                <tr>
                                                    <th>Ticket</th>
                                                    <th>Issue</th>
                                                    <th>Status</th>
                                                    <th>Last Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">#6123</a></td>
                                                    <td>Unable to purchase</td>
                                                    <td><span class="badge text-warning">Open</span></td>
                                                    <td>11 Jan, 2021</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">#5120</a></td>
                                                    <td>Billing Issue</td>
                                                    <td><span class="badge text-danger">Closed</span></td>
                                                    <td>15 Dec, 2020</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">#4204</a></td>
                                                    <td>Account issue</td>
                                                    <td><span class="badge text-success">Resolved</span></td>
                                                    <td>04 Dec, 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <h6 class="lead-text mb-3">Activities</h6>
                                    <ul class="nk-activity">
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-success">
                                                <img src="./images/avatar/c-sm.jpg" alt="">
                                            </div>
                                            <div class="nk-activity-data">
                                                <div class="label">You have successfully verified email</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You updated password</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-azure">MR</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You have added a new address</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-purple">HS</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You have signed up for a newsletter</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-pink">SM</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You changed your phone number</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You have successfully linked Facebook account</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-pink">SM</div>
                                            <div class="nk-activity-data">
                                                <div class="label">You have joined referral program</div>
                                                <span class="time">2 Nov, 2020 04:00 PM</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                   =
@endsection