<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function shop(){
        $posts = Post::all();
        return view('dashboard',compact('posts'));
    }
    // public function show($id)
    // {
    //     $data = Post::findOrFail($id);
    //     return view('shop-single', compact('posts'));
    // }

    public function formEdit($id){
        $posts = Post::find($id);
        return view('dashboard', compact('data'));
        
    }
}


