@extends('template.master')

@section('content')
<div class="nk-app-root">
    <div class="nk-content-body">
        <div class="components-preview wide-xl mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        {{-- <h4 class="title nk-block-title">Tambah customer</h4> --}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">customer Info</h5>
                        </div>
                        <form action="{{ route('customers.update', $customer->id) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama">Nama Customer</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $customer->nama }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="email" id="email" value="{{ $customer->email }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="no_hp">No Handphone</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $customer->no_hp }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <div class="form-control-wrap">
                                            <input type="integer" class="form-control" name="alamat" id="alamat" value="{{ $customer->alamat }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Update customer</button>
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
