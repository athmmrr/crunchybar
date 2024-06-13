@extends('dashboard')
@section('content')

    <div class="d-flex justify-content-center">...</div>
            <div class="card" >
        <div class="card-header">
            Form Edit Produk
        </div>
        <div class="card-body">
                    <form action="{{route('update')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="{{ $posts->nama_barang }}">
                    </div>
                                <div class="mb-3">
                        <label for="tlp" class="form-label">No.Telp</label>
                        <input type="text" class="form-control" name="tlp" id="tlp" aria-describedby="tlp" value="{{ $posts->harga }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="{{ $posts->stok }}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <input type="hidden" value="{{$posts->id}}" name="id">
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                    </form>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago 
        </div>
        </div>
    </div>
@endsection