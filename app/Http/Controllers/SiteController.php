<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post;

class SiteController extends Controller
{
    public function index(){

        $posts = Post::where('publish' , '=', 1)->paginate(12);
        return view('site')->with(compact('posts'));
    }

    public function show($id){

        $post = Post::where('publish' , '=', 1)->findOrFail($id);
        return view('show')->with(compact('post'));
    }
}
