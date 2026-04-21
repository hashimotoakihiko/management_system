<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '管理システム')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}?v={{ filemtime(public_path('css/theme.css')) }}">
    @yield('head')
</head>
<body>
    <header class="site-header">
        <h1 class="site-title">vending machine</h1>
    </header>
    <main class="container mt-4 page-main">
        @yield('content')
    </main>
    <footer class="text-center mt-5 mb-3 site-footer">
        <small>&copy; 2026 管理システム</small>
    </footer>
</body>
</html>
