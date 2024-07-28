@extends('template.master')

@section('add')
<div class="row mb-3">
    <div class="col-md-12">
        <a href="{{ route('properties.create') }}" class="btn btn-primary">Tambah Property</a>
    </div>
</div>
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
                                    <div class="card-header">{{ __('Property Management Page') }}</div>
                    
                                    <div class="card-body">
                            
                    
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
                                                            <td>
                                                                @if(isset($property->gambar))
                                                                    <img src="{{ $property->gambar }}" alt="Property Image" width="50">
                                                                @else
                                                                    No image available
                                                                @endif
                                                            </td>
                                                            <td>{{ $property->harga }}</td>
                                                            <td>{{ $property->lokasi }}</td>
                                                            <td>{{ $property->kategori }}</td>
                                                            <td>{{ $property->status }}</td>
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