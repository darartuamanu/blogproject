@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Results for "{{ $query }}"</h1>
    @if($posts->isEmpty())
        <p>No posts found.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
