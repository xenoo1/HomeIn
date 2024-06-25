@extends('template.master')

@section('content')
    <h1>Ubah Properti</h1>
    <form method="POST" action="{{ route('properties.update', $property) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="nama" placeholder="Nama Properti" value="{{ $property->nama }}" required>
        <textarea name="deskripsi" placeholder="Deskripsi" required>{{ $property->description }}</textarea>
        <input type="file" name="gambar">
        <input type="number" name="harga" placeholder="Harga" value="{{ $property->harga }}" required>
        <input type="text" name="lokasi" placeholder="Lokasi" value="{{ $property->lokasi }}" required>
        <input type="text" name="kategori" placeholder="Kategori" value="{{ $property->kategori }}" required>
        <select name="status" required>
            <option value="tersedia" {{ $property->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="terjual" {{ $property->status == 'terjual' ? 'selected' : '' }}>Terjual</option>
            <option value="disewa" {{ $property->status == 'disewa' ? 'selected' : '' }}>Disewakan</option>
        </select>
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
