?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    // Define common methods or properties here

    public function index()
    {
        $post = "laravel practice one";
        return view('post.index', ['post' => $post]);
    }
}

