<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        
    }
    //Index method to display posts
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
        $file = request()->file('image');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        // dd($file_name);
        $file->move(public_path('images'), $file_name);
  
        $data = $request->all();
        $data['image'] = $file_name;
      
        // Create new Post instance and save

        Post::create($data);
        // $post = new Post;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image = $file_name;
        // $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
// dd( $post);
        return view('posts.details',compact('post'));
    }

    // Destroy method to delete a post
    
        public function destroy($id)
        {
            $post = Post::find($id);
    
            if ($post) {
                $post->delete();
                return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
            }
    
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }
    }
