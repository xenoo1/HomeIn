@extends('template.master')
@section('title','Orderlist Page')
@section('heading','Selamat Datang Di Halaman Penjualan')

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
                                                            <th>ID Customer</th> 
                                                            <th>ID Property</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($orderlist as $orderlist)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $orderlist->customer_id }}</td>
                                                            <td>{{ $orderlist->property_id }}</td>
                                                            <td>{{ $orderlist->status }}</td>
                                                            <td class="tb-odr-action">
                                                                {{-- <div class="tb-odr-btns d-none d-md-inline">
                                                                    <a href="{{ route('customers.show', $orderlist) }}" class="btn btn-sm btn-primary">View</a>
                                                                </div> --}}
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="{{ route('orderlist.edit', ['orderlist' => $orderlist->id]) }}" class="text-primary">Edit</a></li>
                                                                            {{-- <li><a href="{{ route('orderlist.destroy', $orderlist) }}" class="text-danger">Remove</a></li> --}}
                                                                            <form action="{{ route('orderlist.destroy', $orderlist->id) }}" method="POST">
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