@extends('layouts.app')

@section('content')
    <h1>Edit Detail</h1>
    <form action="{{ route('details.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="blog_id">Blog ID</label>
            <input type="number" name="blog_id" id="blog_id" value="{{ $detail->blog_id }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $detail->description }}</textarea>
        </div>
        <div>
            <label for="additional_info">Additional Info</label>
            <input type="text" name="additional_info" id="additional_info" value="{{ $detail->additional_info }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection