@extends('layout')

@section('content')
    <header class="mb-5">
        <h1 class="text-uppercase mb-3">Welcome to my blog!</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae laborum pariatur. Exercitationem, accusamus consectetur.
        </p>
    </header>

    <div class="row">
        <div class="col-md-4 py-3">
            <a href="/posts" class="d-block text-center border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
                <h2 class="h3 m-0 text-uppercase">
                    Posts
                </h2>
            </a>
        </div>
        <div class="col-md-4 py-3">
            <a href="/categories" class="d-block text-center border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
                <h2 class="h3 m-0 text-uppercase">
                    Categories
                </h2>
            </a>
        </div>
        <div class="col-md-4 py-3">
            <a href="/authors" class="d-block text-center border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
                <h2 class="h3 m-0 text-uppercase">
                    Authors
                </h2>
            </a>
        </div>
    </div>
@endsection
