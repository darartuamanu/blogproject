<!-- resources/views/search/results.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Add your existing styles here */
        .search-results {
            max-width: 900px;
            margin: 20px auto;
        }

        .search-results h1 {
            text-align: center;
            color: #1e90ff;
        }

        .search-results .post {
            border: 1px solid #333;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #222;
        }

        .search-results .post h2 {
            color: #fff;
        }

        .search-results .post p {
            color: #ccc;
        }
    </style>
</head>
<body>
    <div class="search-results">
        <h1>Search Results for "{{ $query }}"</h1>
        @forelse($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ \Illuminate\Support\Str::limit($post->description, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}">Read More</a>
            </div>
        @empty
            <p>No posts found.</p>
        @endforelse
    </div>
</body>
</html>
