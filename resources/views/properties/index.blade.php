@extends('template.master')

@section('add')

@endsection


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
                                    <div class="card-header">
                                        {{-- <h5 class="card-title">Data Property</h5> --}}
                                        <a href="{{ route('properties.create') }}" class="btn btn-primary">Tambah Property</a>
                                    </div>
                    
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                               
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>Nama Property</th>
                                                            {{-- <th>Deskripsi</th> --}}
                                                            {{-- <th>Tanggal</th> --}}
                                                            <th>Harga Property</th>
                                                            <th>Alamat Property</th>
                                                            <th>Tipe Property</th>
                                                            <th>Luas Property</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($properties as $property)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $property->nama_property }}</td>
                                                            {{-- <td>{{ $property->deskripsi }}</td> --}}
                                                            {{-- <td>{{ $property->tanggal }}</td> --}}
                                                            <td>IDR {{ $property->harga }}</td>
                                                            <td>{{ $property->alamat }}</td>
                                                            <td>{{ $property->tipe_rumah }}</td>
                                                            <td>{{ $property->luas }} M</td>
                                                            <td class="tb-odr-action">
                                                                <div class="tb-odr-btns d-none d-md-inline">
                                                                    <a href="{{ route('properties.show', $property) }}" class="btn btn-sm btn-primary">View</a>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="{{ route('properties.edit', ['property' => $property->id]) }}" class="text-primary">Edit</a></li>
                                                                            {{-- <li><a href="{{ route('properties.destroy', $property) }}" class="text-danger">Remove</a></li> --}}
                                                                            <form action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-link text-danger">Hapus</button>
                                                                            </form>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
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
                
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
</body>


@endsection