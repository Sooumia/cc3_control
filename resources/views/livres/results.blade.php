@extends('template')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
               
            </div>
            <div class="col text-end">
                <form class="d-flex" action="{{ route('livres.findByKeyword') }}" method="POST">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="titre">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row mb-3 ">
            @foreach ($categories as $categorie)
                    <form class="col card bg-danger mb-4" action="{{ route('livres.findByCategory') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">{{ $categorie->nom_categorie }}</button>
                    </form>
            @endforeach
        </div>

        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($livres as $livre)
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset($livre->image_Livre) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $livre->titre_Livre }}</h5>
                            @php
                                $auteur = $auteurs->where('id', $livre->Auteur_id)->first();
                            @endphp
                            <p class="card-text">Auteur: {{ $auteur->nom_auteur }} {{ $auteur->prenom_auteur }} </p>
                            <p class="card-text">ISBN: {{ $livre->ISBN_Livre }}</p>
                            <p class="card-text">Prix: {{ $livre->prix }} Dhs</p>
                            <a href="{{ route('livres.show', $livre->id) }}" class="btn btn-primary">Consulter sur le
                                site</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
