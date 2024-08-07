@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Post Details</h1>
    <div class="details">
        <h3>{{ $post->title }}</h3>
        <div style="text-align: center;">
            <img src="{{ asset('images/' . $post->image) }}" alt="#" style="max-width: 100%; height: auto;">
        </div>
        <p>{{ $post->description }}</p>
    </div>
</div>
@endsection
