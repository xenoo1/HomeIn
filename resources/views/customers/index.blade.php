@extends('template.master')
@section('title','Customer Page')
@section('heading','Selamat Datang Di Halaman Customer anda')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Property Management Page') }}</div>

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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor Hp</th>
                                        <th>Alamat</th>
                                        <th>Property Yang telah dibeli</th>
                                        <th>Payment status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->nama }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->nomor_hp }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>
                                            @foreach($customer->properties as $property)
                                                {{ $property->nama }} ({{ $property->kategori }})
                                            @endforeach
                                        </td>
                                        <td>{{ $customer->payment_status }}</td>
                                        <td>
                                            <a href="{{ route('customers.show', $customer) }}">Show</a>
                                            <a href="{{ route('customers.edit', $customer) }}">Edit</a>
                                            <form action="{{ route('customers.destroy', $customer) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">Delete</button>
                                            </form>
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

@endsection