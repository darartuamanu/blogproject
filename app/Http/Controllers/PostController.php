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
use App\Notifications\NewPostNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;



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
        $data['user_id'] = Auth::id();
    
        // Create new Post instance and save
        $post = Post::create($data);
    
        // Notify all users about the new post
        $users = User::all();
        Notification::send($users, new NewPostNotification($post));
    
        // Optionally, send an email to a specific address
       // Mail::to('darartuamanu6@gmail.com')->send(new PostPublished($post));
    
        //return redirect()->route('posts.index')->with('success', 'Post published and notifications sent.');
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
