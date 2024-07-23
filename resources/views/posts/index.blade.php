@extends('layouts.app')

@section('content')

    <!-- About Us Section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- You can add some content here if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Posts Section -->
    <div class="container">
        @foreach ($posts as $post)
            <div class="row margin_top_30">
                <div class="col-md-6">
                    <img src="{{ asset('images/' . $post->image) }}" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <h4><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <h5>{{ $post->created_at->diffForHumans() }}</h5>
                        <p>{{ $post->description }}</p>
                        <hr>
                        <!-- Edit Button -->
                        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
