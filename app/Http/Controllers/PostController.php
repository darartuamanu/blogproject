<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        
    }
    Index method to display posts
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }


    


    // Create method to show the create post form
    public function create()
    {
        return view('posts.create');
    }

    // Store method to handle post creation
    public function store(Request $request)
    {
        // Validations
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        // Create new Post instance and save

        Post::create($request->all());
        // $post = new Post;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image = $file_name;
        // $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    // Destroy method to delete a post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

}