<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '管理システム')</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('head')
</head>
<body>
    <header>
        <h1>vending machine</h1>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
    <footer class="text-center mt-5 mb-3">
        <small>&copy; 2026 管理システム</small>
    </footer>
</body>
</html>
