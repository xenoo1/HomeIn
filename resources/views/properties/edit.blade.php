@extends('template.master')
@section('title','Edit Properti')

@section('content')
<div class="container">
    <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $property->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $property->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <img src="{{ $property->gambar }}" alt="Property Image" width="50">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ $property->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $property->lokasi }}" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-control" required>
                <option value="rumah" {{ $property->kategori == 'rumah' ? 'selected' : '' }}>Rumah</option>
                <option value="villa" {{ $property->kategori == 'villa' ? 'selected' : '' }}>Villa</option>
                <option value="apartment" {{ $property->kategori == 'apartment' ? 'selected' : '' }}>Apartment</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="tersedia" {{ $property->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="terjual" {{ $property->status == 'terjual' ? 'selected' : '' }}>Terjual</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Property</button>
    </form>
</div>
@endsection