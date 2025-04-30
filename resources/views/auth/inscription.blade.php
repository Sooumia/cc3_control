<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
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
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" alt="Logo"
                style="width: 150px; height: 90px" />
            <ul>
                <li><a href="{{ route('auth.loginForm') }}">Login</a></li>
                <li><a href="{{ route('admin.login') }}">Admin</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><a href="{{ route('books') }}">Our Books</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </nav>
    </header>
    <div class="d-flex align-items-center flex-column justify-content-center">
        <h1>Register</h1>
        <form style="margin-top: 10px;" class="form w-50" method="POST" action="{{ route('auth.register') }}">
            @csrf
            <label class=" m-2 float-left" for="name">Name:</label>
            <input class="form-control m-2" type="text" name="name" id="name" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label class="col-form-label m-2" for="email">Email:</label>
            <input class="form-control m-2" type="text" name="email" id="email" />
            @error('email')
                <span class="text-danger">{{ $message }}</span><br>
            @enderror
            <label class="col-form-label m-2" for="password">Password:</label>
            <input class="form-control m-2" type="password" name="password" id="password" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <label class="col-form-label m-2" for="password_confirmation">Confirm Password:</label>
            <input class="form-control m-2" type="password" name="password_confirmation" id="password_confirmation" />
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <span class="d-flex align-content-end justify-content-end">
                <input class="btn btn-primary m-2" type="submit" value="Register" />
                <input class="btn btn-danger m-2" type="reset" value="Discard" />
                <a class="btn btn-dark m-2" href="{{ route('auth.loginForm') }}">Log-In</a>
            </span>
        </form>
    </div>
</body>

</html>
