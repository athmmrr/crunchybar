@extends('Ddash')

@section('content')


<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <a href="{{route('formTambah')}}" class="btn btn-success">+</a><br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                    @if (isset($posts))   
                                    @foreach ($posts as $key => $post)
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{{ $post->nama_barang }}</td>
                                        <td>{{ $post->harga }}</td>
                                        <td>{{ $post->stok }}</td>
                                        <td>
                                            <div class="row">
                                            <div class="col-4">
                                            <a href="{{route('formEdit', $post->id)}}" class="btn btn-warning">Edit</a>
                                            </div>
                                            <div class="col-4">
                                                <form action="{{route('hapus')}}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $post->id }}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

@endsection
