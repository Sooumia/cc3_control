<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Contact US Page</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p class="p">
                Our contact us page is your gateway to a seamless connection
                with our team. <br />
                Whether you have a question,suggestion, or simply want to
                say hello,we're her to listen.
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>
                            Book company on rue giliz
                            <br />Marrakech,<br />40000
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+212 643-112214</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>devmaster@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2 class="h">Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required" />
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="" required="required" />
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
