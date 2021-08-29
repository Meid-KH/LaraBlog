@extends('layout')

@section('content')
    <header class="mb-5">
        <h1 class="text-uppercase mb-3"> {{ $category->name }} </h1>
        <p class="lead">
            {{ $category->description }} 
        </p>
    </header>
    {{-- <h3> {{$category->posts->title}} </h3> --}}
    {{-- @dump($category->posts->name) --}}
    <h2 class="mb-4">All posts</h2>
    @foreach ($category->posts as $post)
        <a href="/post/{{$post->slug}}" class="d-block border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
            {{-- <h3 class="mb-2"> {{ $post->title }} </h3> --}}
            <div class="d-flex align-items-start justify-content-between mb-2">
                <h2 class="h3"> {{ $post->title }} </h2>
                <span class="alert alert-dark d-inline-block text-truncate font-weight-bold py-1 rounded">
                    Authored by : {{ $post->author->name}}
                </span>
            </div>
            <span class="alert alert-info d-inline-block font-weight-bold py-1 rounded">
                Category : {{ $post->category->name }}
            </span>
            <p>{{ $post->excerpt }}</p>
        </a>
    @endforeach
@endsection

