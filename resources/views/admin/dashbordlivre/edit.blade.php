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
                    <h1 class="recent-Articles">Edit Book</h1>
                </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset($article->image_Livre) }}" width="200px" height="300px" alt="{{ $article->titre_Livre }}">
                </div>
            </div>
            <div class="col-md-8 ">
                <form action="{{ route('dashbordlivre.update',$article['id'])}} " method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="ISBN_Livre" class="form-label">ISBN</label>
                        <input type="text" class="form-control @error('ISBN_Livre') is-invalid @enderror"
                            value="{{ $article->ISBN_Livre }}" id="ISBN_Livre" name="ISBN_Livre" required>
                        @error('ISBN_Livre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="titre_Livre" class="form-label">Title</label>
                        <input type="text" class="form-control @error('titre_Livre') is-invalid @enderror"
                            id="titre_Livre" value="{{ $article->titre_Livre }}" name="titre_Livre" required>
                        @error('titre_Livre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description_Livre" class="form-label">Description</label>
                        <textarea class="form-control @error('description_Livre') is-invalid @enderror" id="description_Livre"
                            name="description_Livre" rows="3">{{ $article->description_Livre }}</textarea>
                        @error('description_Livre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prix_Livre" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control @error('prix_Livre') is-invalid @enderror"
                            value="{{ $article->prix_Livre }}" id="prix_Livre" name="prix_Livre">
                        @error('prix_Livre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Auteur_id" class="form-label">Author</label>
                        <select name="Auteur_id" class="form-select @error('Auteur_id') is-invalid @enderror">
                            @foreach ($auteurs as $auteur)
                                <option value="{{ $auteur->id }}" @if ($auteur->id == $article->Auteur_id) selected @endif>
                                    {{ $auteur->nom_auteur }} {{ $auteur->prenom_auteur }}</option>
                            @endforeach
                        </select>
                        @error('Auteur_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Categorie_id" class="form-label">Category</label>
                        <select name="Categorie_id" class="form-select @error('Categorie_id') is-invalid @enderror">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" @if ($categorie->id == $article->Categorie_id) selected @endif>
                                    {{ $categorie->nom_categorie }}</option>
                            @endforeach
                        </select>
                        @error('Categorie_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-grey">Reset</button>
                    <a href="{{ route('dashbordlivre.index') }}" class="btn btn-danger ">Back</a>
                </form>
            </div>
        </div>
    </div>
    
@endsection

