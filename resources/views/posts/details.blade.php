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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.details-trigger').hover(function() {
                $(this).next('.details').toggleClass('active');
            });
        });
    </script>
</head>
<body>
    <h1>Details</h1>
    <a href="{{ route('details.create') }}">Add New Detail</a>
    @foreach($details as $detail)
        <div>
            <h2>{{ $detail->description }}</h2>
            <a href="{{ route('details.show', $detail->id) }}">View</a>
            <a href="{{ route('details.edit', $detail->id) }}">Edit</a>
            <form action="{{ route('details.destroy', $detail->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <div>
            <p>
                {{ $detail->short_description }}
                <span class="details-trigger">Hover here for details</span>.
            </p>
            <div class="details">
                <h3>{{ $detail->title }}</h3>
                <p>{{ $detail->description }}</p>
                <p>Price: {{ $detail->price }}</p>
                <p>Availability: {{ $detail->availability }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>
