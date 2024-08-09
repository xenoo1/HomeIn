@extends('template.master')

@section('content')
<div class="nk-app-root">
    <div class="nk-content-body">
        <div class="components-preview wide-xl mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        {{-- <h4 class="title nk-block-title">Tambah orderlist</h4> --}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Orderlist Info</h5>
                        </div>
                        <form action="{{ route('orderlist.update', $orderlist->id) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="property_id">ID Property</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="property_id" id="property_id" value="{{ $orderlist->property_id }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customer_id">ID Customer</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="customer_id" id="customer_id" value="{{ $orderlist->customer_id }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="status" required>
                                            <option value="paid" {{ $orderlist->status == 'paid' ? 'selected' : '' }}>paid</option>
                                            <option value="nonpaid" {{ $orderlist->status == 'nonpaid' ? 'selected' : '' }}>nonpaid</option>
                                            <option value="pending" {{ $orderlist->status == 'pending' ? 'selected' : '' }}>pending</option>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Update orderlist</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection
