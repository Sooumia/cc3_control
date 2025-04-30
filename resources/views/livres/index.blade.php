@extends('template')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 20px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }
    .card-img-top {
        height: 300px;
        object-fit: cover;
    }
    .card-body {
        padding: 1.5rem;
    }
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .card-text {
        color: #666;
        margin-bottom: 0.5rem;
    }
    .btn-primary {
        width: 100%;
        margin-top: 1rem;
    }
    .categories-container {
        margin-bottom: 2rem;
    }
    .categories-container .btn {
        margin: 0.25rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        background-color: #f8f9fa;
        color: #333;
        transition: all 0.3s ease;
    }
    .categories-container .btn:hover {
        background-color: #007bff;
        color: white;
    }
</style>
@if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
@section('content')
    <div class="container">
        <div class="row mb-3">
            
            <div class="col text-end">
                <form class="d-flex" action="{{ route('livres.findByKeyword') }}" method="POST">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="categories-container">
            <div class="row mb-3">
                @foreach ($categories as $categorie)
                    <form class=" card mb-4" action="{{ route('livres.findByCategory') }}" method="POST">
                        @csrf
                        <input value="{{ $categorie->id }}" name="category" hidden>
                        <button type="submit" class="btn">{{ $categorie->nom_categorie }}</button>
                    </form>
                @endforeach
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($livres as $livre)
                <div class="col-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset($livre->image_Livre) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $livre->titre_Livre }}</h5>
                            @php
                                $auteur = $auteurs->where('id', $livre->Auteur_id)->first();
                            @endphp
                            <p class="card-text">Auteur: {{ $auteur->nom_auteur }} {{ $auteur->prenom_auteur }} </p>
                            <p class="card-text">ISBN: {{ $livre->ISBN_Livre }}</p>
                            <p class="card-text">Prix: {{ $livre->prix_Livre }} Dhs</p>
                            <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
