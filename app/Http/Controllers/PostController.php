<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use App\Mail\PostPublished;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        //$this->middleware('auth'); // Ensure all methods require authentication
    }

    // Index method to display posts
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

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
            'status' => 'required|in:draft,published,archived',
        ]);

        // Handle image upload
        $file = $request->file('image');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $file_name);

        $data = $request->all();
        $data['image'] = $file_name;
        $data['user_id'] = auth()->user()->id;

        // Create new Post instance and save
       $post = Post::create($data);
       $x= Mail::to('darartuamanu6@gmail.com')->send(new PostPublished($post));

       return redirect()->route('posts.index')->with('success', 'Post published and notification sent.');
    }

    // Show method to display a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.details', compact('post')); // Ensure 'details' is the correct view name
    }
    // Destroy method to delete a post
    public function destroy(Request $request, Post $post)
    {
        //dd('dd');
        // $this->authorize('destroy', $post);

        // Delete the post
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }

    // Edit method to show the edit post form
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        //$this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    // Update method to handle post updates
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // $this->authorize('update', $post);

        // Validate the request data
        $request->validate([
            'title' => 'required|max:255|unique:posts,title,' . $post->id,
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:draft,published,archived',
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

        return redirect()->route('dashboard.posts.update')->with('success', 'Post updated successfully');
    }
    public function publishPost(Request $request)
    {
        $post = Post::find($request->post_id);

        // Publish the post logic here...

        // Send email notification
        Mail::to('darartuamanu6@gmail.com')->send(new PostPublished($post));

        return redirect()->route('posts.index')->with('success', 'Post published and notification sent.');
    }
}
