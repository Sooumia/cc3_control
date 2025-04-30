@extends('template3')

@section('content')
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img" alt="dashboard">
                        <h3><a href="{{ route('dashbordlivre.index') }}">Dashboard</a> </h3>
                    </div>

                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img"
                            alt="articles">
                        <h3><a href="{{ route('users2.index') }}">Users</a> </h3>
                    </div>

                    <div class="nav-option option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img"
                            alt="report">
                        <h3> <a href="{{ route('category.index') }}">category</a></h3>
                    </div>

                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img"
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
        <div class="main">
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Author Details</h1>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong>error<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('author.update', $auteur->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nom_auteur">First Name:</label>
                        <input class="form-control" type="text" id="nom_auteur" name="nom_auteur" value="{{ $auteur->nom_auteur }}" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom_auteur">Last Name:</label>
                        <input class="form-control" type="text" id="prenom_auteur" name="prenom_auteur" value="{{ $auteur->prenom_auteur }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="pays_auteur">country:</label>
                        <input class="form-control" type="text" id="pays_auteur" name="pays_auteur" value="{{ $auteur->pays_auteur }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="datenaissance_auteur">Birthday:</label>
                        <input class="form-control" type="date" id="datenaissance_auteur" name="datenaissance_auteur"
                            value="{{ $auteur->datenaissance_auteur }}" required>
                    </div>
                    <div class="btn-container">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <a class="btn btn-danger float-right" href="{{ route('author.index') }}"> Back</a>

                    </div>
                </form>
            @endsection
