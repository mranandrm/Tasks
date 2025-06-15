<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    {{-- HEADER --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Admin Panel</a>

        <div class="ms-auto d-flex align-items-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light btn-sm">Logout</button>
            </form>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Admin Panel</a>

    <div class="ms-auto d-flex align-items-center text-white">
        <div class="me-3 text-end">
            <div><strong>{{ auth()->user()->name }}</strong></div>
            <small class="text-light">{{ ucfirst(auth()->user()->role) }}</small>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-light btn-sm">Logout</button>
        </form>
    </div>
</nav>


    <div class="d-flex">
        {{-- SIDEBAR --}}
        <aside class="bg-light p-3" style="width: 220px; min-height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">🏠 Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}" href="{{ route('user.index') }}">👥 Manage Users</a>
                </li>
               <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->routeIs('products.index.*') ? 'active' : '' }}" href="{{ route('products.index') }}">👥 Manage products</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link {{ request()->routeIs('orders.index.*') ? 'active' : '' }}" href="{{ route('orders.index') }}">👥 Manage Order</a>
                </li>
            </ul>
        </aside>

      
        <main class="flex-grow-1 p-4">
            <h4 class="mb-4">@yield('title')</h4>

        

            @yield('content')
        </main>
    </div>

    {{-- FOOTER --}}
    <footer class="bg-dark text-light text-center py-2">
        <small>&copy; {{ date('Y') }} Admin Panel. All rights reserved.</small>
    </footer>
</body>
</html>
