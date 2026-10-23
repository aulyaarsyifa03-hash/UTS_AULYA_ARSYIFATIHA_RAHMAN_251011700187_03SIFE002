<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Galeri Kuliner Daerah')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-uts">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dishes.index') }}">Galeri Kuliner Daerah</a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dishes.index') ? 'active' : '' }}" href="{{ route('dishes.index') }}">Daftar Masakan</a>
                    </li>
                    @isset($dish)
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dishes.show', $dish) }}">{{ $dish->name }}</a>
                        </li>
                    @endisset
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            Aulya Arsyifatiha Rahman &middot; 251011700187 &middot; 03SIFE002 &middot; UTS Rekayasa Web 2026/2027
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
