@extends('template3')

@section('content')
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
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

                    <div class="nav-option option">
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
                    <h1 class="recent-Articles">Add New Book</h1>
                </div>
                        <form action="{{ route('dashbordlivre.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="ISBN_Livre">ISBN</label>
                                <input type="text" class="form-control @error('ISBN_Livre') is-invalid @enderror" id="ISBN_Livre" name="ISBN_Livre" required>
                                @error('ISBN_Livre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="titre_Livre">Title</label>
                                <input type="text" class="form-control @error('titre_Livre') is-invalid @enderror" id="titre_Livre" name="titre_Livre" required>
                                @error('titre_Livre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_Livre">Description</label>
                                <textarea class="form-control @error('description_Livre') is-invalid @enderror" id="description_Livre" name="description_Livre" rows="3"></textarea>
                                @error('description_Livre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="prix_Livre">Price</label>
                                <input type="number" step="0.01" class="form-control @error('prix_Livre') is-invalid @enderror" id="prix_Livre" name="prix_Livre">
                                @error('prix_Livre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_Livre">Image</label>
                                <input type="file" class="form-control @error('image_Livre') is-invalid @enderror" id="image_Livre" name="image_Livre">
                                @error('image_Livre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Auteur_id">Author</label>
                                <select name="Auteur_id" class="form-select @error('Auteur_id') is-invalid @enderror">
                                    @foreach ($auteurs as $auteur)
                                        <option value="{{ $auteur->id }}">{{ $auteur->nom_auteur }} {{ $auteur->prenom_auteur }}</option>
                                    @endforeach
                                </select>
                                @error('Auteur_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Categorie_id">Category</label>
                                <select name="Categorie_id" class="form-select @error('Categorie_id') is-invalid @enderror">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
                                    @endforeach
                                </select>
                                @error('Categorie_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-primary">reset</button>
                            <a href="{{ route('dashbordlivre.index') }}" class="btn btn-danger ">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
