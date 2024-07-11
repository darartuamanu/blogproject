<!-- resources/views/details.blade.php -->

<!-- resources/views/details.blade.php -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details on Hover</title>
    <style>
        .details {
            display: none;
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
        }
        .details.active {
            display: block;
        }
        .details-trigger {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('.details-trigger').hover(function() {
                $(this).next('.details').toggleClass('active');
            });
        });
    </script> --}}
</head>
<body>
    <h1>Details</h1>
    {{-- <a href="{{ route('details.create') }}">Add New Detail</a> --}}
    <div class="details">
        <h3>{{ $post->title }}</h3>
        <img class="img-fluid" style="max-width:25%;" src="{{ asset('images/'.$post->image)}}" alt="">
        <p>{{ $post->description }}</p>  
    </div>
        <div>
            <h2>{{ $post->description }}</h2>
            <a href="{{ route('details.show', $post->id) }}">View</a>
            <a href="{{ route('details.edit', $post->id) }}">Edit</a>
            <form action="{{ route('details.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <div>
            <p>
                {{ $post->short_description }}
                <span class="details-trigger">Hover here for details</span>.
            </p>
           
        </div>

</body>
</html> 
