<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            height: 100%;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575d63;
        }
        .sidebar.collapsed {
            width: 0;
            overflow: hidden;
        }
    
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            transition: 0.3s;
        }
        .content.collapsed {
            margin-left: 0;
        }
        .toggle-btn {
            position: fixed;
            left: 10px;
            top: 10px;
            cursor: pointer;
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            border: none;
            font-size: 18px;
        }
        .table-container {
        margin: 20px;
    }
    .table-container {
        margin: 20px;
    }
    .table {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table thead th {
        background-color: #343a40;
        color: #fff;
    }
    .table tbody tr:hover {
        background-color: #f1f1f1;
    }
    .btn-edit {
        background-color: #007bff;
        color: #fff;
        margin-right: 80ch; /* Space between Edit and Delete buttons */
    }
    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }
    .btn-edit, .btn-delete {
        padding: 5px 10px;
        font-size: 0.9rem;
    }
    .td-spacing {
        padding-right: 80cm; 
}
    </style>
</head>
<body>
    
    <div class="sidebar" id="sidebar">
        @include('layouts.include.sidebar')
    </div>
    <div class="content" id="content">
       @yield('content') 
    </div>
    
    <!-- Include JavaScript files here -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
           
        
        }
    </script>
        
    
</body>
</html>
