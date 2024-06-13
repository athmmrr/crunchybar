<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GambarController extends Controller
{
    public function simpanGambar(Request $request)
    {
        if($request->hasFile('gambar')){
            $folder = 'path_ke_folder';
            $fileName = $request->file('gambar')->hashName();
            $path = Storage::disk('public')->put($folder. '/' . $fileName, file_get_contents($request->file('gambar')));

            return "Gambar berhasil diunggah! <br>Lokasi penyimpanan $path dengan nama file $fileName";
        }
    }
}
