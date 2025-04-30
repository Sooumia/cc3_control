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
                @if (session('success'))
                    <div class="alert alert-success w-25 p-3 text-center" id="successMessage">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Users</h1>

                </div>

                <div class="report-body" style="height: 300px; overflow-y: auto;">
                    <div class="report-topic-heading">
                        <h3 class="t-op">Name</h3>
                        <h3 class="t-op">Email</h3>
                        <h3 class="t-op">Password</h3>
                        <h3 class="t-op"colspan="3">ACTIONS</h3>
                    </div>

                    <div class="items">
                        @forelse ($users as $user)
                            <div class="item1">
                                <h3 class="t-op-nextlvl">{{ $user->name }} </h3>
                                <h3 class="t-op-nextlvl">{{ $user->email }} </h3>
                                <h3 class="t-op-nextlvl">{{ $user->password }} </h3>
                                <div class="t-op-nextlvl actions" style="  grid-column: span 3;">
                                    <h3 class="t-op-nextlvl label-tag"> <a
                                            class="action-link"href="{{ route('users2.show', $user->id) }}"
                                            class="btn btn-primary">View</a></h3>
                                    <h3 class="t-op-nextlvl label-tag"><a
                                            class="action-link"href="{{ route('users2.edit', $user->id) }}"
                                            class="btn btn-secondary">Edit</a> </h3>
                                    <form action="{{ route('users2.destroy', $user->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="t-op-nextlvl label-tag"
                                            onclick="return confirm(' Are you sure you want to delete this category ?')">Delet</button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="item1">
                                <h3 class="t-op-nextlvl">No Users available</h3>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>


    </body>
@endsection
