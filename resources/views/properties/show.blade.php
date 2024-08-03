@extends('template.master')

@section('content')
    {{-- <body class="nk-body ui-rounder has-sidebar ">
        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <div class="nk-wrap ">
                    <!-- main header @s -->

                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">{{ __('Detail Property') }}</div>

                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th>ID</th>
                                                            <td>{{ $property->id }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <td>{{ $property->nama }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Deskripsi</th>
                                                            <td>{{ $property->deskripsi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <td><img src="{{ $property->gambar }}" alt="Property Image" width="200"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Harga</th>
                                                            <td>{{ $property->harga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Lokasi</th>
                                                            <td>{{ $property->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Kategori</th>
                                                            <td>{{ $property->kategori }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Status</th>
                                                            <td>{{ $property->status }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>
    </body> --}}
@section('content')
<div class="nk-app-root">
    <div class="nk-content-body">
        <div class="components-preview wide-xl mx-auto">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">{{ $property->nama_property }}</h4>
                        <div class="nk-block-des">
                            <p>{{ $property->alamat }}</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Property Details</h5>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Nama Property</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->nama_property }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->alamat }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Deskripsi</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Harga</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->harga }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Tanggal</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->tanggal }}</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Tipe Rumah</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->tipe_rumah }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Jumlah Kamar Tidur</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->kamar_tidur }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Jumlah Kamar Mandi</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->kamar_mandi }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Luas</label>
                                    <div class="form-control-wrap">
                                        <p>{{ $property->luas }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Gambar</label>
                                    <div class="form-control-wrap">
                                        <img src="{{ asset('storage/' . ($property->gambar ?? 'default.jpg')) }}" alt="Gambar Property" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Galeri</label>
                                    <div class="form-control-wrap">
                                        @if($property->galeri !== null)
                                            @foreach($property->galeri as $gambar)
                                                <img src="{{ asset('storage/' . $gambar->path) }}" alt="Gambar Galeri" class="img-fluid">
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <a href="{{ route('properties.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>          
</div>
@endsection


@endsection