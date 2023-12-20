<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Shelter</title>

    <style>
        body {
            background-color: #101010;
        }
        h1 {
            color: rebeccapurple;
        }
        h2 {
            color: rebeccapurple;
        }
    </style>
</head>

<body>

<header>
    <!-- Add your header content here -->
    <h1>Paw Shelter</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Admin</a></li>
            <li><a href="/about">About</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
</header>

<main>
    @yield('about')
    @yield('index')
    @yield('login')
    @yield('register')
</main>

<footer>
    <!-- Add your footer content here -->
    <p>&copy; {{ date('Y') }} Paw Shelter. All rights reserved.</p>
</footer>

</body>
</html>
