<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Middleware\CheckAdmin;

class DashboardController extends Controller


{
    
    public function __construct()
    {
        $this->middleware('admin'); 
    }


    public function index()
       
{

    $currentuser = Auth::user();

    $posts = Post::where('user_id',  $currentuser->id)->get();
    // dd($posts);
    return view('dashboard', compact('posts'));
}
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Authorize the user
       // $this->authorize('update', $post);

        return view('dashboard.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Authorize the user
       // $this->authorize('update', $post);

        $post->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Authorize the user
       // $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }
    
}


