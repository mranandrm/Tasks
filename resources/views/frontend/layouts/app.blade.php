{{-- 
<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        function toggleTheme() {
            let html = document.documentElement;
            let currentTheme = html.getAttribute('data-bs-theme');
            let newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            document.getElementById('themeIcon').textContent = newTheme === 'dark' ? '🌙' : '☀️';
        }

        document.addEventListener('DOMContentLoaded', () => {
            let savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', savedTheme);
            document.getElementById('themeIcon').textContent = savedTheme === 'dark' ? '🌙' : '☀️';
        });
    </script>
</head>
<body class="bg-body text-body">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4">
        <a class="navbar-brand" href="/">My Blog</a>
<a href="{{ route('external.users') }}" class="btn btn-outline-light">External Users</a>

        <div class="ms-auto d-flex align-items-center gap-2">
            <button id="themeToggleBtn" class="btn btn-light" onclick="toggleTheme()">
                <span id="themeIcon">🌙</span>
            </button>

            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-light">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html> --}}




<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

    <script>
        function toggleTheme() {
            let html = document.documentElement;
            let currentTheme = html.getAttribute('data-bs-theme');
            let newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            document.getElementById('themeIcon').textContent = newTheme === 'dark' ? '🌙' : '☀️';
        }

        document.addEventListener('DOMContentLoaded', () => {
            let savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', savedTheme);
            document.getElementById('themeIcon').textContent = savedTheme === 'dark' ? '🌙' : '☀️';
        });
    </script>
</head>
<body class="bg-body text-body">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4">
        <a class="navbar-brand" href="/">My Blog</a>

        <!-- Toggle button for mobile (3-line icon) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
                

                <li class="nav-item">
                    <button id="themeToggleBtn" class="btn btn-light" onclick="toggleTheme()">
                        <span id="themeIcon">🌙</span>
                    </button>
                </li>
                <li class="nav-item">
                    <a href="{{ route('external.users') }}" class="btn btn-outline-light">External Users</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-light">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

