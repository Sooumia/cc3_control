@extends('template')

@section('content')
    <h1>Cart</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Book Image</th>
                <th>Book Title</th>
                <th>Book Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $cartItem)
            
                <tr>
                    <td>
                        @if ($cartItem->livre)
                            <img class="img-fluid" src="{{ asset($cartItem->livre->image_Livre) }}" alt="Book Image"
                                style="max-width: 100px;">
                        @endif
                    </td>
                    <td>
                        @if ($cartItem->livre)
                            <h5 class="card-title">{{ $cartItem->livre->titre_Livre }}</h5>
                        @endif
                    </td>
                    <td>
                        @if ($cartItem->livre)
                            <p class="card-text">{{ $cartItem->livre->description_Livre }}</p>
                        @endif
                    </td>
                    <td>
                        @if ($cartItem->livre)
                            <p class="card-text">{{ $cartItem->livre->prix_Livre }} Dhs</p>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('cart.remove', ['userId' => $cartItem->user_id, 'bookId' => $cartItem->book_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <strong>Total: {{ $total }} Dhs</strong>
                </td>
                <td>
                    <form action="{{ route('payment.checkout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection