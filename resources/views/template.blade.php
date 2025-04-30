<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        .categories-container {
            overflow-x: auto;
            padding: 10px;
        }

        .categories-container .row {
            display: inline-flex;
            flex-wrap: nowrap;
        }

        .categories-container .col {
            display: inline-block;
            margin-right: 10px;
            /* Adjust as needed */
        }

        .categories-container .btn {
            display: block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #000000;
            margin-bottom: -40px;
            
        }

        


        
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" style="width: 150px; height: 90px;">
            <ul>
                @auth
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('auth.loginForm') }}">Login</a></li>
                    <li><a href="{{ route('admin.login') }}">Admin</a></li>
                @endauth
                @auth
                    <li><a href="{{ route('cart.index') }}">View Cart</a></li>
                @endauth
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><a href="{{ route('books') }}">Our Books</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                @auth
                    <li><a href="{{ route('livres.index') }}">home</a></li>
                @else
                    <li><a href="{{ route('home') }}">home</a></li>
                @endauth
            </ul>
        </nav>
    </header>
    @yield('content')
</body>

</html>
