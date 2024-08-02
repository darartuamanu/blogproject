<!-- resources/views/layouts/layout.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Add common styles here */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header, .footer {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
        }
        .header a, .footer a {
            color: #fff;
            text-decoration: none;
        }
        .header a:hover, .footer a:hover {
            text-decoration: underline;
        }
        .main-content {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1><a href="{{ route('home') }}" class="text-white">My Blog</a></h1>
                <nav>
                    <a href="{{ route('dashboard') }}">Dashboard</a> | 
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
