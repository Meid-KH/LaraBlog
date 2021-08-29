<x-layout>
    {{-- <header class="mb-5">
        <h1 class="text-uppercase mb-3">All posts</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit molestiae laborum pariatur. Exercitationem, accusamus consectetur.
        </p>
    </header>

    @foreach ($posts as $p)
        <a href="post/{{$p->slug}}" class="d-block border p-4 rounded bg-secondary text-light text-decoration-none mb-4">
            <div class="d-flex align-items-start justify-content-between mb-2">
                <h2 class="h3"> {{ $p->title }} </h2>
                <span class="alert alert-dark d-inline-block text-truncate font-weight-bold py-1 rounded">
                    Authored by : {{ $p->author->name}}
                </span>
            </div>
            <span class="alert alert-info d-inline-block font-weight-bold py-1 rounded">
                Category : {{ $p->category->name }}
            </span>
            <p>{{ $p->excerpt }}</p>
        </a>
    @endforeach 
    --}}

    <x-post-header/>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-item-featured :post="$posts[0]" />
        @else
            <p> No posts yet </p>
        @endif

        
        @if ($posts->count() > 1)
            <x-post-list :posts="$posts" />
        @endif
    </main>

</x-layout>
