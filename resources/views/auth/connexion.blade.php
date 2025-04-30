<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}
    <style>
        h1 {
            font-family: 'Bebas Neue', cursive;
            text-transform: capitalize;
            background-image: linear-gradient(#007BFF, #007BFF);
            background-size: 100% 10px;
            background-repeat: no-repeat;
            background-position: 100% 0%;
            transition: background-size .7s, background-position .5s ease-in-out;
            font-family: 'Times New Roman', Times, serif;
            color: #007BFF;
            cursor: pointer;
        }

        h1:hover {
            background-size: 100% 100%;
            background-position: 0% 100%;
            transition: background-position .7s, background-size .5s ease-in-out;
            color: #E3F2FD;
        }

        @keyframes fadeOut {
            0% {
                opacity: 0.8;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .text-red {
            color: red;
        }

        .border-red {
            border-color: red !important;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: #e665f1;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
        }

        li a:hover:not(.active) {
            background-color: #e665f1;
            color: #fff;
            border-radius: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #ffffffef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        .form {
            width: 50%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            margin-top: 10px;
            font-weight: bold;
        }

        .form-control {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-control.is-invalid {
            border-color: red;
        }

        .invalid-feedback {
            color: red;
            font-size: 0.875em;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007BFF;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-dark {
            background-color: #343a40;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .alert {
            margin: 20px auto;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            width: 25%;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" style="width: 150px; height: 90px" />
            <ul>
                @auth
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('admin.login') }}">Admin</a></li>
                @endauth
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><a href="{{ route('books') }}">Our Books</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </nav>
    </header>
    <div class="form-container">
        <h1>Login</h1>
        <form class="form" method="POST" action="{{ route('auth.login') }}">
            @csrf
            <label class="form-label" for="email">Email:</label>
            <input class="form-control @error('email') border-red @enderror" type="text" name="email"
                id="email" />
            @error('email')
                <div class="invalid-feedback">Invalid email</div>
            @enderror

            <label class="form-label" for="password">Password:</label>
            <input class="form-control @error('password') border-red @enderror" type="password" name="password"
                id="password" />
            @error('password')
                <div class="invalid-feedback">Invalid password</div>
            @enderror

            <div class="d-flex justify-content-end">
                <input class="btn btn-primary" type="submit" value="Login" />
                <input class="btn btn-danger" type="reset" value="Discard" />
                <a class="btn btn-dark" href="{{ route('auth.registerForm') }}">Register</a>
            </div>
        </form>
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</body>

</html>
