@extends('template.master')
@section('title','Customer Page')
@section('heading','Selamat Datang Di Halaman Customer anda')

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
                                        {{-- <h5 class="card-title">Data customer</h5> --}}
                                   
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
                                                            <th>Nama</th> 
                                                            <th>Email</th>
                                                            <th>No Handphone</th>
                                                            <th>Alamat</th>
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($customers as $customer)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $customer->nama }}</td>
                                                            <td>{{ $customer->email }}</td>
                                                            <td>{{ $customer->no_hp }}</td>
                                                            <td>{{ $customer->alamat }}</td>
                                                            
                                                            <td class="tb-odr-action">
                                                                {{-- <div class="tb-odr-btns d-none d-md-inline">
                                                                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-sm btn-primary">View</a>
                                                                </div> --}}
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="{{ route('customers.edit', ['customer' => $customer->id]) }}" class="text-primary">Edit</a></li>
                                                                            {{-- <li><a href="{{ route('customers.destroy', $customer) }}" class="text-danger">Remove</a></li> --}}
                                                                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
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