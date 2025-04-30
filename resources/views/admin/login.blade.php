{{-- @extends('template')
@section('content')

    <h1>Connexion administrateur</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div>
            <label for="email">Adresse e-mail</label>
            <input type="email" name="email" id="email"  required autofocus>
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form> --}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
            border-color: red;
            !important
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
    </style>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" alt="Logo"
                style="width: 150px; height: 90px" />
            <ul>
                
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li><a href="{{ route('books') }}">Our Books</a></li>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </nav>
    </header>
    <div class="d-flex align-items-center flex-column justify-content-center">
        <h1 style="margin-top: 100px;">ADMIN</h1>
        <form style="margin-top: 10px;" class="form w-50" method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label class=" m-2 float-left" for="email">email : </label>
            <input class="form-control m-2 @error('email') border border-red @enderror" type="text" name="email"
                id="email" />
            @error('email')
                <div class="p-3 text-center text-red">
                    Invalid email
                </div>
            @enderror
            <label class="col-form-label m-2" for="password">Password : </label>
            <input class="form-control m-2 @error('password') border border-red @enderror" type="password"
                name="password" id="password" />
            @error('password')
                <div class="p-3 text-center text-red">
                    Invalid password
                </div>
            @enderror
            <span class="d-flex align-content-end justify-content-end">
                <input class="btn btn-primary m-2" type="submit" value="Login" />
                <input class="btn btn-danger m-2" type="reset"  value="Discard" />
            </span>
        </form>
    </div>
    @if (session('error'))
        <div class="alert alert-danger w-25 p-3 text-center">
            {{ session('error') }}
        </div>
    @endif
</body>

</html>

{{-- @endsection --}}