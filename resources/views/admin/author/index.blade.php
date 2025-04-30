





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

                    <div class="nav-option option1">
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
                    <h1 class="recent-Articles">Recent authors</h1>
                    <a class="t-op-nextlvl"
                    style="background-color: rgb(60, 229, 255); padding:10px; border-radius:14px;"
                    href="{{ route('author.create') }}" class="btn btn-primary float-right">Add New Author</a>

                </div>

                <div class="report-body" style="height: 300px; overflow-y: auto;">
                    <div class="report-topic-heading">
                        <h3 class="t-op">ID</h3>
                        <h3 class="t-op">First Name</h3>
                        <h3 class="t-op">Last Name</h3>
                        <h3 class="t-op">Country</h3>
                        <h3 class="t-op">Birthday</h3>
                        <h3 class="t-op"colspan="3">ACTIONS</h3>
                    </div>

                    <div class="items">
                        @forelse ($auteurs as $author)
                            <div class="item1">
                                <h3 class="t-op-nextlvl">{{ $author->id }} </h3>
                                <h3 class="t-op-nextlvl">{{ $author->nom_auteur }} </h3>
                                <h3 class="t-op-nextlvl">{{ $author->prenom_auteur }} </h3>
                                <h3 class="t-op-nextlvl">{{ $author->pays_auteur }} </h3>
                                <h3 class="t-op-nextlvl">{{ $author->datenaissance_auteur }} </h3>
                                <div class="t-op-nextlvl actions" style="  grid-column: span 3;">
                                    <h3 class="t-op-nextlvl label-tag"> <a
                                            class="action-link"href="{{ route('author.show', $author->id) }}"
                                            class="btn btn-primary">View</a></h3>
                                    <h3 class="t-op-nextlvl label-tag"><a
                                            class="action-link"href="{{ route('author.edit', $author->id) }}"
                                            class="btn btn-secondary">Edit</a> </h3>
                                    <form action="{{ route('author.destroy', $author->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="t-op-nextlvl label-tag"
                                            onclick="return confirm(' Are you sure you want to delete this category ?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="item1">
                                <h3 class="t-op-nextlvl">No Authors available</h3>
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
