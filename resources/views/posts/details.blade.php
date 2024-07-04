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
                $('.details').toggleClass('active');
            });
        });
    </script>
</head>
<body>
    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            <span class="details-trigger">Hover here for details</span>.
        </p>
        <div class="details">
            <h3>{{ $details['title'] }}</h3>
            <p>{{ $details['description'] }}</p>
            <p>Price: {{ $details['price'] }}</p>
            <p>Availability: {{ $details['availability'] }}</p>
        </div>
    </div>
</body>
</html>