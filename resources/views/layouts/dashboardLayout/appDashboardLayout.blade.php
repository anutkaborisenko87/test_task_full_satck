<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Test task full-stack position.') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/dashboard/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Ссылка 1</a></li>
        <li><a href="#">Ссылка 2</a></li>
        <li><a href="#">Ссылка 3</a></li>
    </ul>
</nav>
@yield('content')
</body>
</html>
