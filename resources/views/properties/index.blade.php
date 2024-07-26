@extends('template.master')


{{-- @section('add')
<div class="row mb-3">
    <div class="col-md-12">
        <a href="{{ route('properties.create') }}" class="btn btn-primary">Tambah Property</a>
    </div>
</div>
@endsection --}}


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
                                                            <td class="tb-odr-action">
                                                                <div class="tb-odr-btns d-none d-md-inline">
                                                                    <a href="{{ route('properties.show', $property) }}" class="btn btn-sm btn-primary">View</a>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="edit" class="text-primary">Edit</a></li>
                                                                            <li><a href="{{ route('properties.destroy', $property) }}" class="text-danger">Remove</a></li>
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
</body> --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Product List | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/dashlite.css?ver=3.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css?ver=3.2.0') }}">
</head>

<body class="nk-body ui-rounder has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
           
            <!-- wrap @s -->
        
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Daftar Property</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>Manage your property</p>
                                        </div>
                                          
                                 
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-search"></em>
                                                            </div>
                                                            <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><span>New Items</span></a></li>
                                                                    <li><a href="#"><span>Featured</span></a></li>
                                                                    <li><a href="#"><span>Out of Stock</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nk-block-tools-opt">
                                                        <a href="{{ route('properties.create') }}" data-target="addProperty" class=" btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                        <a href="{{ route('properties.create') }}" data-target="addProperty" class=" btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Product</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card">
                                    <div class="card-inner-group">
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="pid">
                                                            <label class="custom-control-label" for="pid"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col"><span>Nama</span></div>
                                                    <div class="nk-tb-col"><span>Deskripsi</span></div>
                                                    <div class="nk-tb-col"><span>Harga</span></div>
                                                    <div class="nk-tb-col"><span>Lokasi</span></div>
                                                    <div class="nk-tb-col"><span>Kategori</span></div>
                                                    <div class="nk-tb-col"><span>Status</span></div>
                                                    <div class="nk-tb-col"><span>Gambar</span></div>                                                    
                                                
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1 my-n1">
                                                            <li class="me-n1">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->

                                               
                                                {{-- tabel --}}
                                                @foreach($properties as $property)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="pid{{ $property->id }}">
                                                                <label class="custom-control-label" for="pid{{ $property->id }}"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            {{ $property->nama }}
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            {{ $property->deskripsi }}
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-lead">{{ $property->harga }}</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            {{ $property->lokasi }}
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            {{ $property->kategori }}
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            {{ $property->status }}
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <img src="{{ $property->gambar }}" alt="Property Image" width="50">
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li class="me-n1">
                                                                    <div class="dropdown">
                                                                        <a class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{ route('properties.edit', $property->id) }}"><em class="icon ni ni-edit"></em><span>Edit Property</span></a></li>
                                                                                <li><a href="{{ route('properties.show', $property->id) }}"><em class="icon ni ni-eye"></em><span>View Property</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Property Orders</span></a></li>
                                                                                <li>
                                                                                    <form action="{{ route('properties.destroy', $property->id) }}" method="post">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit" class="btn btn-link"><em class="icon ni ni-trash"></em><span>Remove Property</span></button>
                                                                                    </form>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <!-- .nk-tb-item -->
                                            <!-- .nk-tb-item -->
                                            </div><!-- .nk-tb-list -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><!-- .nk-block -->
                            {{-- tambah properti --}}
                            {{-- <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProperty" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">New Product</h5>
                                        <div class="nk-block-des">
                                            <p>Add information and add new product.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="property-nama">Nama</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="property-nama" name="nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="property-deskripsi">Deskripsi</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" id="property-deskripsi" name="deskripsi"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="property-harga">Harga</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" step="0.01" class="form-control" id="property-harga" name="harga">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="property-lokasi">Lokasi</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="property-lokasi" name="lokasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="property-kategori">Kategori</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="property-kategori" name="kategori">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="property-status">Status</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-control" id="property-status" name="status">
                                                        <option value="tersedia">Tersedia</option>
                                                        <option value="terjual">Terjual</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="property-gambar">Gambar</label>
                                                <div class="form-control-wrap">
                                                    <input type="file" class="form-control" id="property-gambar" name="gambar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-block -->
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- content @e -->
             
           
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
   <!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ asset('/assets/js/bundle.js?ver=3.2.0') }}"></script>
    <script src="{{ asset('/assets/js/scripts.js?ver=3.2.0') }}"></script>
</body>

</html>


@endsection