@extends('layout')

@section('content')
    <header class="mb-5">
        <h1 class="mb-3">All authors</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae laborum pariatur. Exercitationem, accusamus consectetur.
        </p>
    </header>

    <div class="row">
        @foreach ($authors as $author)
        <div class="col-md-6 py-3">
            <a href="author/{{$author->id}}" class="d-block h-100 border p-4 rounded bg-secondary text-light text-decoration-none">
                <h2 class="m-0"> {{ $author->name }} </h2>
            </a>
        </div>
        @endforeach
    </div>
@endsection

