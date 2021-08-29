<x-layout>
    {{-- <header class="mb-5">
        <h1 class="text-uppercase h2 mb-3"> {{ $post->title }} </h1>
        <div class="d-flex align-items-start justify-content-between mb-2">
            <a href="/category/{{ $post->category->slug }}" class="alert alert-info d-inline-block font-weight-bold py-1 rounded">
                Category : {{ $post->category->name }}
            </a>
            <a href="/author/{{ $post->author->id }}" class="alert alert-dark d-inline-block text-truncate font-weight-bold py-1 rounded">
                Authored by : {{ $post->author->name}}
            </a>
        </div>
    </header>
    <article class="border p-4 rounded bg-secondary text-light">
        <p class="m-0 lead"> {{ $post->body }} </p>
    </article> --}}
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <a href="author{{ $post->author->id }}" class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </a>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/posts"
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <a 
                            href="/category/{{ $post->category->slug }}"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        >
                            {{ $post->category->name }}
                        </a>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose"> {{ $post->body }} </div>
            </div>
        </article>
    </main>
</x-layout>

