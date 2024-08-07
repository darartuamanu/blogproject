@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search</h1>
    <form action="{{ route('search.results') }}" method="GET">
        @csrf
        <input type="text" name="query" placeholder="Search..." value="{{ old('query') }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection
