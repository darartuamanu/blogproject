
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <aside class="sidebar" id="sidebar">
        <!-- Sidebar content -->
        <h2>Sidebar</h2>
        <ul>
            <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
        
        <a href="{{ route('create') }}"><i class="fas fa-plus"></i> Add Post</a>
        @if(auth()->check() && auth()->user()->is_admin)
        <a href="{{ route('users.index') }}">
            <i class="fas fa-user"></i> User
        </a>
    @endif
    

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            
            <i class="fas fa-sign-out-alt"></i> Logout</a>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </ul>
    </aside>
    
