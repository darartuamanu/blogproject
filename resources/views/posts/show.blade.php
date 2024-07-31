<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <img src="{{ asset('images/'.$post->image) }}" class="img-fluid" alt="Post Image">
        <p>{{ $post->description }}</p>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
    </div>
</body>
</html>
