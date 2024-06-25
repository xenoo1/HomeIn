@extends('template.master')

@section('content')
    <h1>{{ $property->nama }}</h1>
    <p>{{ $property->deskripsi }}</p>
    <p>Harga: {{ $property->harga }}</p>
    <p>Lokasi: {{ $property->lokasi }}</p>
    <p>Kategori: {{ $property->ketegori }}</p>
    <p>Status: {{ $property->status }}</p>
    @if ($property->gambar)
        <img src="{{ asset('storage/' . $property->gambar) }}" alt="{{ $property->nama }}">
    @endif
    <a href="{{ route('properties.edit', $property) }}">Ubah</a>
    <form method="POST" action="{{ route('properties.destroy', $property) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
