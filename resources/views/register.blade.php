<!-- resources/views -->

@extends('layouts.app')

@section('register')

<div id="app">
    <h2>User Registration</h2>

    <form @submit.prevent="registerUser">
        @CSRF
        <!-- Username -->
        <label for="username">Username:</label>
        <input type="text" id="username" v-model="userData.username" required>
        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="userData.email" required>
        <br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="userData.password" required>
        <br>

        <!-- Confirm Password -->
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" v-model="userData.confirmPassword" required>
        <br>

        <button type="submit">Register</button>
    </form>

    <div v-if="registrationError" style="color: red; margin-top: 10px;">
        @{{ registrationError }}
    </div>

    <div v-if="registrationSuccess" style="color: green; margin-top: 10px;">
        @{{ registrationSuccess }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            userData: {
                username: '',
                email: '',
                password: '',
                confirmPassword: ''
            },
            registrationError: null,
            registrationSuccess: null
        },
        methods: {
            registerUser() {
                // Check if passwords match
                if (this.userData.password !== this.userData.confirmPassword) {
                    this.registrationError = 'Passwords do not match.';
                    return;
                }

                // Clear previous error/success messages
                this.registrationError = null;
                this.registrationSuccess = null;

                // Make payload
                const payload = {
                    username: this.userData.username,
                    email: this.userData.email,
                    password: this.userData.password,
                };

                // Make registration request using Axios
                axios.post('/api/register', payload)
                    .then(response => {
                        this.registrationSuccess = response.data.message;
                    })
                    .catch(error => {
                        this.registrationError = error.response.data.error;
                    });
            }
        }
    });
</script>

@endsection
