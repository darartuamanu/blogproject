<?php

namespace App\Http\Controllers;

abstract class Controller{

    public function index(){
        $post="laravel practice one";
        return view('posts.index',['post'=>$post]);
    }
}
