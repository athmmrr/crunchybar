<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('dashboard',compact('posts'));
     }
    
    public function formTambah(){
        return view('formTambah');
    }

    public function simpanData(Request $request){
        $nama_barang = $request->nama_barang;
        $harga = $request->harga;
        $stok = $request->stok;

        $posts = new Post();
        $posts->nama_barang = $nama_barang;
        $posts->harga = $harga;
        $posts->stok = $stok;

        $posts->save();

        return redirect('admin')->with('status', 'Data Berhasil Disimpan');

    }

    public function formEdit($id){
        $posts = Post::find($id);
        return view('formEdit', compact('posts'));
        
    }
    public function updateTamu(Request $request){
        $id = $request->id;
        $nama_barang = $request->nama_barang;
        $harga = $request->harga;
        $stok = $request->stok;

        $posts = Post::find($id);
        $posts->nama_barang = $nama_barang;
        $posts->harga = $harga;
        $posts->stok = $stok;
        $posts->update();

        return redirect('admin')->with('status', 'Data Berhasil Diupdate');
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $posts = Post::find($id);
        $posts->delete();
        return redirect('admin')->with('status', 'Data Berhasil Diupdate');
        
        
    }
}
