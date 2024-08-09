@extends('template.master')

@section('content')

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
                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Gambar</label>
                                    <div class="form-control-wrap">
                                        <img src="{{ asset('storage/' . ($property->gambar ?? 'default.jpg')) }}" alt="Gambar Property" class="img-fluid">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="images-container">
                                @foreach (File::files(public_path('galery')) as $file)
                                    <img class="image-icon9" loading="lazy"
                                        alt="{{ pathinfo($file->getFilename(), PATHINFO_FILENAME) }}"
                                        src="{{ asset('galery/' . $file->getFilename()) }}" />
                                @endforeach
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