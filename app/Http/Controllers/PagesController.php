<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages/welcome')->withPosts($posts);

    }

    public function getAbout(){
        return view('pages/about');
    }
    Public function getContact(){
        $first  = 'culo';
        $last   = 'reculo';
        $fullname   = $first . ' ' . $last;
        $email = 'CULO';
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        
        return view('pages/contact') -> withData($data);
    }


}