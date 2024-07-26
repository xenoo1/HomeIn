@extends('template.master')
@section('title','Tambah Properti')

@section('content')
<body class="nk-body ui-rounder has-sidebar ">
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
                                                    <label for="gambar" class="form-label">Gambar Belakang</label>
                                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Gambar Kiri</label>
                                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar" class="form-label">Gambar Kanan</label>
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
</body>
@endsection