@extends('template.master')
@section('title','Manajemen Property Page')
@section('heading','Selamat Datang Di Manajemen Properti anda')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Property Management Page') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <a href="{{ route('properties.create') }}" class="btn btn-primary">Add New Property</a>
                            <a href="#" class="btn btn-secondary">Edit Existing Property</a>
                            <a href="#" class="btn btn-danger">Delete Property</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>nama</th>
                                        <th>deskripsi</th>
                                        <th>gambar</th>
                                        <th>harga</th>
                                        <th>lokasi</th>
                                        <th>kategori</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>{{ $property->nama }}</td>
                                        <td>{{ $property->deskripsi }}</td>
                                        <td><img src="{{ $property->gambar }}" alt="Property Image" width="50"></td>
                                        <td>{{ $property->harga }}</td>
                                        <td>{{ $property->lokasi }}</td>
                                        <td>{{ $property->kategori }}</td>
                                        <td>{{ $property->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection