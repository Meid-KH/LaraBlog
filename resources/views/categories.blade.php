@extends('layout')

@section('content')
    <header class="mb-5">
        <h1 class="text-uppercase mb-3">All Categories</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae laborum pariatur. Exercitationem, accusamus consectetur.
        </p>
    </header>

    @foreach ($categories as $c)
        <a href="category/{{$c->slug}}" class="d-block border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
            <h2 class="mb-2"> {{ $c->name }} </h2>
            <p>{{ $c->description }}</p>
        </a>
    @endforeach
@endsection

