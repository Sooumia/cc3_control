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

                    <div class="option1 nav-option">
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

                    <div class="nav-option option4">
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
                    <h1 class="recent-Articles">Edit Users</h1>
                </div>
                <div class="report-body" style="height: 300px; overflow-y: auto;">
                    <form action="{{ route('users2.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" value="{{ $user->password }}"
                                    name="password">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePasswordVisibility()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var passwordButton = document.querySelector('.input-group-append button');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                passwordButton.innerHTML = '<i class="fas fa-eye"></i>';
            }
        }
    </script>
@endsection
