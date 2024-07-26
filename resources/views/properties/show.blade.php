@extends('template.master')

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
    </body>

@endsection