@extends('dashboard')
@section('content')

    <div class="d-flex justify-content-center">...</div>
            <div class="card" > 
        <div class="card-header">
            Form Tambah Bar
        </div>
        <div class="card-body">
                    <form action="{{route('simpan')}}" method="post">
                        @csrf
                        <div class="mb-3">
                <label for="nama_barang" class="custom-select">Nama</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" aria-describedby="nama_barang">
            </div>
                        <div class="mb-3">
                <label for="harga" class="custom-select">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" aria-describedby="harga">
            </div>
            <div class="mb-3">
                <label for="stok" class="custom-select">Stok</label>
                <input type="text" class="form-control" name="stok" id="stok" aria-describedby="stok">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
        

@endsection