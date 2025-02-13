<?php

namespace App\Http\Controllers;
use App\Http\Middleware\CheckAdmin;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {   
       // $this->middleware('auth'); // todo
    }

    // Index method to display posts
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
            'description' => 'required|max:400',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $file = request()->file('image');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $file_name);
  
        $data = $request->all();
        $data['image'] = $file_name;
        $data['user_id'] = auth()->id();  // Assuming you have a user_id column to associate the post with the user

        // Create new Post instance and save
        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.details', compact('post'));
    }

    // Destroy method to delete a post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('delete', $post);

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('update', $post);

        // Validate the request data
        $request->validate([
            'title' => 'required|max:255|unique:posts,title,' . $post->id,
            'description' => 'required|max:400',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $file_name);
            $post->image = $file_name;
        }

        // Update the post
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }
}
