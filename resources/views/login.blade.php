<!-- resources/views -->

@extends('layouts.app')

@section('login')

<div class="container">
    <h1>User Login</h1>
    <form id="registrationForm">
        @csrf <!-- CSRF token for Laravel security -->

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="button" class="btn btn-primary" onclick="registerUser()">Login</button>
    </form>
    <a href="/register">Register new account</a>
</div>

<script>
    function registerUser() {
        // Get form data
        var formData = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        };

        // AJAX request using Fetch API
        fetch('/api/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
            .then(response => response.json())
            .then(data => {
                console.log('Registration successful:', data);
                // Handle success, e.g., show a success message
            })
            .catch(error => {
                console.error('Registration failed:', error);
                // Handle error, e.g., show an error message
            });
    }
</script>

@endsection
