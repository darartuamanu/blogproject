@extends('layouts.admin')
@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

             <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1> 
            <p class="col-md-8 fs-4">Welcome to blog.<br /></p>
        </div>
    </div>

    <!-- Posts Management Section -->
    <div class="container">
        <h2 class="mb-4">Manage Posts</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>post_id</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button><br><br>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
