@extends('template')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>User Information</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                 
                </table>
            </div>

            <div class="col-md-6">
                <h2>Cart Items</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->livre->titre_Livre }}</td>
                                <td>{{ $item->livre->prix_Livre }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Total:</td>
                            <td>{{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Payment Information</h2>
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="delivery_phone">Delivery Phone</label>
                        <input type="text" class="form-control" id="delivery_phone" name="delivery_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="delivery_address">Delivery Address</label>
                        <textarea class="form-control" id="delivery_address" name="delivery_address" rows="3" required></textarea>
                    </div>
                    <input type="hidden" name="books_id" value="{{ implode(',', $books_id) }}">
                    <input type="hidden" name="total" value="{{ $total }}">
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </form>
            </div>
        </div>
    </div>
@endsection
