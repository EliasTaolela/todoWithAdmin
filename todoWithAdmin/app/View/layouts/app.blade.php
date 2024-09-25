<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles') <!-- To push additional styles if needed -->
</head>
<body>
    <header>
        <nav>
            <!-- Navigation links -->
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/todos') }}">Todos</a>
            <a href="{{ url('/admin/dashboard') }}">Admin Dashboard</a>
        </nav>
    </header>

    <main>
        @yield('content') <!-- This is where the content of child views will be injected -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts') <!-- To push additional scripts if needed -->
</body>
</html>
