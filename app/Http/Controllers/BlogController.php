<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
    
    public function getIndex() {

        $post = Post::paginate(10);
        return view('blog.index')->withPosts($post);
    }

    public function getSingle($slug){
        //fetch 
        $post = Post::where('slug', '=', $slug)->first();

        return view('blog.single')->withPost($post);
    }
}
