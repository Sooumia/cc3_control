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
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" style="width: 150px; height: 90px;">
            <ul>

                <li><a href="{{ route('home') }}">Logout</a></li>
                <li><a href="{{ route('admin.orders') }}">order</a></li>
                <li><a href="{{ route('author.index') }}">Author</a></li>
                <li><a href="{{ route('category.index') }}">category</a></li>
                <li><a href="{{ route('users2.index') }}">Users</a></li>
                <li><a href="{{ route('dashbordlivre.index') }}">dashbord</a></li>
            </ul>
        </nav>
    </header>
    @if (session('success'))
        <div class="alert alert-success w-25 p-3 text-center">
            {{ session('success') }}
        </div>
    @endif
    @yield('content')
</body>
<script src="{{ asset('jquery/jquery-3.7.0.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</html>
