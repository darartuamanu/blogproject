@extends('layouts.app')

@section('content')
    <h1>Detail</h1>
    <div>
        <p>{{ $detail->description }}</p>
        <p>{{ $detail->additional_info }}</p>
    </div>
@endsection