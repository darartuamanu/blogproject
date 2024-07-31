<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details on Hover</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #1e90ff;
            margin-bottom: 20px;
        }

        .details {
            display: none;
            margin-top: 10px;
            padding: 15px;
            border: 1px solid #1e90ff;
            border-radius: 8px;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
        }

        .details.active {
            display: block;
        }

        .details-trigger {
            cursor: pointer;
            color: #1e90ff;
            text-decoration: none;
            font-weight: 700;
            position: relative;
        }

        .details-trigger:hover::after {
            content: ' \25BC'; /* Downward triangle icon */
            position: absolute;
            right: -20px;
            top: 0;
        }

        .details img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .details h3 {
            margin-top: 0;
            color: #fff;
        }

        .details p {
            color: #ccc;
        }

        .action-links {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .action-links a, .action-links button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .action-links a {
            background-color: #1e90ff;
        }

        .action-links a:hover {
            background-color: #1c86ee;
        }

        .action-links button {
            background-color: #dc3545;
        }

        .action-links button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Details</h1>
        <div class="details">
            <h3>{{ $post->title }}</h3>
            <img class="img-fluid" src="{{ asset('images/'.$post->image)}}" alt="">
            <p>{{ $post->description }}</p>
        </div>
        <div>
            <h2>{{ $post->description }}</h2>
            <div class="action-links">
                {{-- <a href="{{ route('details.show', $post->id) }}">View</a> --}}
                {{-- <a href="{{ route('details.edit', $post->id) }}">Edit</a> --}}
                <form action="{{ route('details.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        <div>
            <p>
                {{ $post->short_description }}
                <span class="details-trigger" onclick="toggleDetails()">Hover here for details</span>.
            </p>
        </div>
    </div>

    <script>
        function toggleDetails() {
            const details = document.querySelector('.details');
            details.classList.toggle('active');
        }
    </script>
</body>
</html>
