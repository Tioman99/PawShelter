<!-- resources/views/index.blade.php -->

@extends('layouts.masterLayout')

@section('register')
<div class="container">
    <h2>User Registration</h2>
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

        <button type="button" class="btn btn-primary" onclick="registerUser()">Register</button>
    </form>
</div>

<script>
    function registerUser() {
        // Get form data
        var formData = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        };

        // Make AJAX request
        $.ajax({
            type: 'POST',
            url: '/api/register', // Adjust the endpoint URL accordingly
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function(response) {
                console.log('Registration successful:', response);
                // Handle success, e.g., show a success message
            },
            error: function(error) {
                console.error('Registration failed:', error);
                // Handle error, e.g., show an error message
            }
        });
    }
</script>
@endsection
