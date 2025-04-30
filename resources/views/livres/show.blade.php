@extends('template')

@section('content')
<style>
       .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card-frame {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-md-6 {
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px);
            padding: 0 15px;
        }

        img.img-fluid {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .book-details {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            margin-bottom: 15px;
        }

        .availability {
            font-weight: bold;
            color: #28a745;
        }

        .unavailability {
            font-weight: bold;
            color: #dc3545;
        }

        form {
            margin-top: 20px;
        }

        button.btn-primary {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
        }
</style>
<div class="container">
    <div class="card-frame">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset($livre->image_Livre) }}" alt="Livre Image">
            </div>
            <div class="col-md-8 book-details">
                <h5 class="card-title">{{ $livre->titre_Livre }}</h5>
                <p class="card-text">{{ $livre->description_Livre }}</p>
             
                <p class="card-text">Prix: {{ $livre->prix_Livre }} Dhs</p>

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="livre_id" value="{{ $livre->id }}">
                    <button type="submit" class="btn-primary">Add To Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
