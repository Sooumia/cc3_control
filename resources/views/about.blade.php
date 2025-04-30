<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>memorial books</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
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
        <h2>About Us</h2>
    </div>
    <div>
        <span>
            <p>Welcome to the Library Books Online</p>
        </span>
    </div>

    <div class="main">
        <div class="pp">
            <div>
                <p>
                    Welcome to our online library platform, where you can
                    explore a vast collection of books from various genres.
                    Whether you are an avid reader, a student, or a book
                    enthusiast, our platform offers a wide range of titles
                    to satisfy your literary cravings.
                </p>
                <p>
                    Discover captivating novels, informative non-fiction,
                    gripping thrillers, thought-provoking classics, and much
                    more. Our curated selection ensures that there is
                    something for everyone, no matter your reading
                    preferences.
                </p>
                <p>
                    With our user-friendly interface, you can easily search
                    for books, explore detailed descriptions, and even read
                    reviews from fellow readers. Create your personal
                    account to enjoy additional features, such as saving
                    your favorite books, creating reading lists, and
                    accessing personalized recommendations.
                </p>
                <p>
                    Join our vibrant community of book lovers and embark on
                    a journey of literary exploration. Whether you're
                    seeking entertainment, knowledge, or inspiration,
                    Library Books Online is your gateway to a world of
                    captivating stories and limitless imagination.
                </p>
                <p>Start your reading adventure today!</p>
                <a href="index.html">Read More</a>
            </div>
            <div>
                <figure><img src='{{ asset('images/about.png') }}' alt="img" /></figure>
            </div>
        </div>
    </div>
</body>

</html>
