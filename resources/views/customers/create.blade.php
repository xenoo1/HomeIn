@extends('template.master')

@section('title', 'Tambah Customer')
@section('heading', 'Tambah Customer')

@section('content')
<body class="nk-body ui-rounder has-sidebar ">
   
        <!-- main @s -->
       
            
                <!-- main header @s -->
                
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">{{ __('Property Management Page') }}</div>
                    
                                    <div class="card-body">
                                        <form action="{{ route('customers.store') }}" method="post">
                                            @csrf
                                            <div class="card card-stretch">
                                                <div class="card-inner">
                                                    <div class="form-group">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" id="nama" name="nama" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" id="email" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp" class="form-label">No HP</label>
                                                        <input type="tel" id="no_hp" name="no_hp" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                                        <select id="metode_pembayaran" name="metode_pembayaran" class="form-control" required>
                                                            <option value="">-- Pilih Metode Pembayaran --</option>
                                                            <option value="cash">Cash</option>
                                                            <option value="credit_card">Credit Card</option>
                                                            <option value="bank_transfer">Bank Transfer</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_property" class="form-label">Jenis Property</label>
                                                        <select id="jenis_property" name="jenis_property" class="form-control" required>
                                                            <option value="">-- Pilih Jenis Property --</option>
                                                            <option value="rumah">Rumah</option>
                                                            <option value="apartemen">Apartemen</option>
                                                            <option value="kantor">Kantor</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select id="status" name="status" class="form-control" required>
                                                            <option value="">-- Pilih Status --</option>
                                                            <option value="aktif">Aktif</option>
                                                            <option value="non_aktif">Non Aktif</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Tambah Customer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
              
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
       
            <!-- wrap @e -->
        
        <!-- main @e -->
    
</body>
@endsection