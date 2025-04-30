<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" alt="Logo"
                style="width: 150px; height: 90px" />
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
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container">
            <div>
                <h1>
                    The Best onling bookstor That<br />
                    Every Book Lover Must<br />
                    Visit!
                </h1>
                <p>
                    Dive into enchanting tales, traverse a spectrum of
                    genres,<br />
                    and rekindle your love for reading. From our shelf to
                    your shelf, become part of our vibrant community of
                    literary explorers and start your unforgettable reading
                    journey today
                </p>
                <div class="button_section">
                    <a class="main_bt" href="{{ route('auth.loginForm') }}">Signe in</a>
                </div>
            </div>
        </div>
        <img class="imga" src="./images/pic1.jpeg" alt="shellf" />
    </section>
    <section class="banner">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,64L26.7,74.7C53.3,85,107,107,160,138.7C213.3,171,267,213,320,213.3C373.3,213,427,171,480,138.7C533.3,107,587,85,640,106.7C693.3,128,747,192,800,197.3C853.3,203,907,149,960,117.3C1013.3,85,1067,75,1120,80C1173.3,85,1227,107,1280,117.3C1333.3,128,1387,128,1413,128L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,
                160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
</body>

</html>
