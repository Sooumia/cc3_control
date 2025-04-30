@extends('template3')


@section('content')
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option">
                        <img src=
https://www.google.com/imgres?q=image%20titre%20livre&imgurlhttps%3A%2F%2Fpubliersonlivre.fr%2Fwp-content%2Fuploads%2F2017%2F06%2Fdelicatesse-187x300.jpg&imgrefurl=https%3A%2F%2Fpubliersonlivre.fr%2Fmethode-trouver-titre-de-livre-fasse-fondre-lecteurs%2F&docid=CDjKRZ21QYUfTM&tbnid=p8GBqxDykQ2mlM&vet=12ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECBgQAA..i&w=187&h=300&hcb=2&ved=2ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECBgQAA                            class="nav-img" alt="dashboard">
                        <h3><a href="{{ route('dashbordlivre.index') }}">Dashboard</a> </h3>
                    </div>

                    <div class="option1 nav-option">
                        <img src=
"https://www.google.com/imgres?q=image%20titre%20livre&imgurl=https%3A%2F%2Fpcplblogue.wordpress.com%2Fwp-content%2Fuploads%2F2015%2F01%2Fombreduvent.jpg&imgrefurl=https%3A%2F%2Fpcplblogue.wordpress.com%2F2015%2F01%2F30%2Fquels-sont-vos-titres-de-romans-preferes%2F&docid=uVgggjMJpRoOyM&tbnid=wYwjWOH8oo-gpM&vet=12ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECC4QAA..i&w=299&h=441&hcb=2&ved=2ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECC4QAA" class="nav-img"
                            alt="articles">
                        <h3><a href="{{ route('users2.index') }}">Users</a> </h3>
                    </div>

                    <div class="nav-option option">
                        <img src=
"https://www.google.com/imgres?q=image%20titre%20livre&imgurl=https%3A%2F%2Fwww.monbestseller.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fnews-mbs-full%2Fpublic%2Fnews_image%2Fdonner_un_titre_a_son_roman-monbestseller.jpg%3Fitok%3D3BMsE4Q_&imgrefurl=https%3A%2F%2Fwww.monbestseller.com%2Factualites-litt%25C3%25A9raire%2F1393-donner-un-titre-a-son-livre&docid=C9ecpykejaoyxM&tbnid=S_S1X66px0eWRM&vet=12ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECBkQAA..i&w=235&h=324&hcb=2&ved=2ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECBkQAA" class="nav-img"
                            alt="report">
                        <h3> <a href="{{ route('category.index') }}">category</a></h3>
                    </div>

                    <div class="nav-option option4">
                        <img src=
"https://www.google.com/imgres?q=image%20titre%20livre&imgurl=https%3A%2F%2Fwww.editions-eres.com%2Fuploads%2Fimg300dpi%2F3317.jpg&imgrefurl=https%3A%2F%2Fwww.editions-eres.com%2Fouvrage%2F3317%2Fj-ai-oublie-le-titre&docid=LJNx3T2Kdb4UeM&tbnid=lg9uQJA6mbDwxM&vet=12ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECCYQAA..i&w=1400&h=2163&hcb=2&ved=2ahUKEwjsgqTQt_-MAxUpfKQEHUa5IaIQM3oECCYQAA" class="nav-img"
                            alt="institution">
                        <h3><a href="{{ route('author.index') }}">Author</a> </h3>
                    </div>

                    <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img"
                            alt="blog">
                        <h3> <a href="{{ route('admin.orders') }}">order</a></h3>
                    </div>



                    <div class="nav-option logout">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img"
                            alt="logout">
                        <h3> <a href="{{ route('home') }}">Logout</a></h3>
                    </div>

                </div>
            </nav>
        </div>
        <div class="report-container">
            <div class="report-header">
                <h1 class="recent-Articles">User Details</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">Email: {{ $user->email }}</p>
                    <p class="card-text">Password: {{ $user->password }}</p>
                </div>
            </div>


        </div>
    @endsection
