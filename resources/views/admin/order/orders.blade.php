@extends('template3')

@section('content')
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png" class="nav-img" alt="dashboard">
                        <h3><a href="{{ route('dashbordlivre.index') }}">Dashboard</a></h3>
                    </div>
                    <div class="option2 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
                        <h3><a href="{{ route('users2.index') }}">Users</a></h3>
                    </div>
                    <div class="nav-option option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                        <h3><a href="{{ route('category.index') }}">Category</a></h3>
                    </div>
                    <div class="nav-option option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="institution">
                        <h3><a href="{{ route('author.index') }}">Author</a></h3>
                    </div>
                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="blog">
                        <h3><a href="{{ route('admin.orders') }}">Order</a></h3>
                    </div>
                    <div class="nav-option logout">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
                        <h3><a href="{{ route('home') }}">Logout</a></h3>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main">
            <div class="report-container">
                @if (session('success'))
                    <div class="alert alert-success w-25 p-3 text-center" id="successMessage">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Orders</h1>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User</th>
                                <th>Books</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Payment Method</th>
                                <th>Delivery Address</th>
                                <th>Delivery Phone</th>
                                <th>Order Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->User->name }}</td>
                                    <td>{{ $order->book_ids }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ $order->delivery_address }}</td>
                                    <td>{{ $order->delivery_phone }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <form action="{{ route('order.updateStatus', ['order' => $order->id]) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('PATCH')
                                            <div class="input-group">
                                                <select name="status" class="form-control">
                                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                                    <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        <form action="{{ route('order.delete', ['order' => $order->id]) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this order?')" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
