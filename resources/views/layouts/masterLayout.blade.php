<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
    <!-- Add your stylesheets, scripts, or other head elements here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <!-- Add your header content here -->
    <h1>Your App</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
</header>

<main>
    @yield('register')
</main>

<footer>
    <!-- Add your footer content here -->
    <p>&copy; {{ date('Y') }} Your App. All rights reserved.</p>
</footer>

<!-- Add your scripts or other body elements here -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
