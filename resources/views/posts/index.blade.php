@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <a class="btn btn-secondary float-end mt-3" href="{{ route('posts.create') }}" role="button">Add Post</a>
    <h1 style="background-color: blue; color: white; font-size: 36px; padding: 10px;">Mini post list</h1>

  </div>
    
  <hr>
  <!-- Message if a post is posted successfully -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
         @if (count($posts) > 0)
    @foreach ($posts as $post)
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2">
              <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/'.$post->image)}}" alt="">
            </div>
            <div class="col-10">
              <h4>{{$post->title}}</h4>
            </div>
          </div>
          <p>{{$post->description}}</p>
          <hr>
        </div>
      </div>

 <!-- Delete Button -->
 <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')"n title="this will delete">Delete</button>
</form>

      <div>
      <img src="{{ asset('image/photo_2024-06-25_20-35-50.jpg') }}" alt="Image Description">
</div>

    @endforeach
  @else
    <p>no description
    </p>
  @endif
</div>
@endsection
<h1>Details</h1>
    <a href="{{ route('details.create') }}">Add New Detail</a>
    @foreach($details as $detail)
        <div>
            <h2>{{ $detail->description }}</h2>
            <a href="{{ route('details.show', $detail->id) }}">View</a>
            <a href="{{ route('details.edit', $detail->id) }}">Edit</a>
            <form action="{{ route('details.destroy', $detail->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection