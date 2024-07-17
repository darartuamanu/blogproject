<?php

namespace App\Http\Controllers;

abstract class Controller{

    public function index(){
        $post="laravel practice one";
        return view('post.index',['post'=>$post]);
    }
}
