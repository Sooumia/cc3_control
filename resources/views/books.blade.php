<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <title>memorial books</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('css/books.css') }}">

</head>

<body class="main-layout Books-bg">
    <header>
        <nav>
            <img src="{{ asset('images/logo-no-background.png') }}" alt="Logo" style="width: 150px; height: 90px" />
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
    <div class="H2">
        <h2>our Books</h2>
    </div>

    <div>
        <p>
            Exploring worlds, creating adventures,<br />
            and enriching minds through timeless stories. <br />
            We diligently curate selections that inspire and entertain,
            <br />
            ensuring every read is a treasure. Embrace the art of reading,
            <br />
            join our community of passionate bibliophiles, and embark <br />
            on journeys of limitless imagination today
        </p>

        <img src="{{ asset('images/WhatsApp Image 2024-05-04 at 00.15.11 (1).jpeg') }}" alt="" />
    </div>

    <section class="banner">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e665f1" fill-opacity="1" d="M0,64L26.7,74.7C53.3,85,107,107,160,138.7C213.3,171,267,213,320,213.3C373.3,213,427,171,480,138.7C533.3,107,587,85,640,106.7C693.3,128,747,192,800,197.3C853.3,203,907,149,960,117.3C1013.3,85,1067,75,1120,80C1173.3,85,1227,107,1280,117.3C1333.3,128,1387,128,1413,128L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,
            160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
</body>

</html>
