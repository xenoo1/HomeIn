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
                                    <div class="card-header">{{ __('Property Management Page') }}</div>
                    
                                    <div class="card-body">
                            
                    
                                        <div class="container">
                                            <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Gambar1 Depan</label>
                                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="harga" class="form-label">Harga</label>
                                                    <input type="number" name="harga" id="harga" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lokasi" class="form-label">Lokasi</label>
                                                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kategori" class="form-label">Kategori</label>
                                                    <select name="kategori" id="kategori" class="form-control" required>
                                                        <option value="rumah">Rumah</option>
                                                        <option value="villa">Villa</option>
                                                        <option value="apartment">Apartment</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select name="status" id="status" class="form-control" required>
                                                        <option value="tersedia">Tersedia</option>
                                                        <option value="terjual">Terjual</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Property</button>
                                            </form>
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
    <div class="nk-app-root">
                        <div class="nk-content-body">
                            <div class="components-preview wide-xl mx-auto">
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Tambah Property</h4>
                                            <div class="nk-block-des">
                                                <p>Tambahkan Property Anda</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="card-head">
                                                <h5 class="card-title">Property Info</h5>
                                            </div>
                                            <form action="{{ route('properties.store') }}" method="POST"  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="nama_property">Nama Property</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="nama_property" id="nama_property" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="alamat">Alamat</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="deskripsi">Deskripsi</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="deskripsi" id="deskripsi" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="harga">Harga</label>
                                                            <div class="form-control-wrap">
                                                                <input type="integer" class="form-control" name="harga" id="harga" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-preview">
                                                        <div class="card-inner">
                                                            <div class="preview-block">
                                                                <div class="row gy-4 justify-content-center">                                                                  
                                                                    <div class="col-sm-6 text-center">
                                                                        <label class="form-label">Dropzone with only Image Upload</label>    
                                                                        <div class="upload-zone" data-accepted-files="image/*" name="gambar">
                                                                            <div class="dz-message" data-dz-message>
                                                                                <span class="dz-message-text">Drag and drop file</span>
                                                                                <span class="dz-message-text">or</span>
                                                                                <button class="btn btn-primary">SELECT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Tanggal</label>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-calendar-alt"></em>
                                                                </div>
                                                                <input type="text" class="form-control date-picker" name="tanggal" required>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                   
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Tipe Rumah</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select js-select2"  name="tipe_rumah" required>
                                                                        <option value="31">31</option>
                                                                        <option value="42">42</option>
                                                                        <option value="53">53</option>
                                                                        <option value="81">81</option>
                                                                        <option value="72">72</option>
                                                                        <option value="36">36</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                                    
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kamar_tidur">Jumlah Kamar Tidur</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" name="kamar_tidur" id="kamar_tidur" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="kamar_mandi">Jumlah Kamar Mandi</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" name="kamar_mandi" id="kamar_mandi" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="luas">Luas</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" name="luas" id="luas" required>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-primary">Simpan Property</button>
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