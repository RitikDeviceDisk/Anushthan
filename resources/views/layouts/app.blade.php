<!DOCTYPE html>
<html>
<head>
    <title>Anushthan Consultancies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Anushthan</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('about') }}">About</a>
            <a class="nav-link" href="{{ route('services') }}">Services</a>
            <a class="nav-link" href="{{ route('leadership') }}">Leadership</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3">
    © 2025 Anushthan Consultancies
</footer>

</body>
</html>
