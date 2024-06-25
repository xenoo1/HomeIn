@extends('template.master')
{{-- @section('content')


    <h1>Daftar Properti</h1>
    <form method="GET" action="{{ route('properties') }}">
        <select name="kategori">
            <option value="">Pilih Kategori</option>
            <!-- Tambahkan kategori di sini -->
        </select>
        <input type="text" name="lokasi" placeholder="Lokasi">
        <input type="number" name="harga_min" placeholder="Harga Minimum">
        <input type="number" name="harga_max" placeholder="Harga Maksimum">
        <select name="status">
            <option value="">Pilih Status</option>
            <option value="tersedia">Tersedia</option>
            <option value="terjual">Terjual</option>
            <option value="disewa">Disewakan</option>
        </select>
        <button type="submit">Filter</button>
    </form>
    <ul>
        @foreach ($properties as $property)
            <li><a href="{{ route('properties.show', $property) }}">{{ $property->name }}</a></li>
        @endforeach
    </ul>
@endsection --}}
