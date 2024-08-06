@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <h1>Post Details</h1>
        <div class="details">
            <h3>{{ $post->title }}</h3>
            <div style="text-align: center;">
                <img class="img-fluid" src="{{ asset('images/'.$post->image)}}" alt="" style="display: inline-block; max-width: 100%; height: auto;">
          </div>
            <p>{{ $post->description }}</p>
        </div>
        <div>
            {{--<p>
                
                <span class="details-trigger" onclick="toggleDetails()">Hover here for details</span>.
            </p>--}}
        {{--</div>
        <div class="action-links">--}}
            {{-- <a href="{{ route('details.show', $post->id) }}">View</a> --}}
            {{-- <a href="{{ route('details.edit', $post->id) }}">Edit</a> --}}
            {{--<form action="{{ route('details.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>--}}
            </form>
        </div>
    </div>

    <script>
        function toggleDetails() {
            const details = document.querySelector('.details');
            details.classList.toggle('active');
        }
    </script>
</body>
@endsection