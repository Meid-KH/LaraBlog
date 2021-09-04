<x-layout>
    <header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500"> blog posts</span> 
        </h1>
        <h2 class="inline-flex mt-2">
            By {{ $author->name }} 
            <img src="/images/lary-head.svg" alt="Head of Lary the mascot">
        </h2>
    </header>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($author->posts->count())
            <x-post-item-featured :post="$author->posts[0]" />
        @else
            <div class="bg-yellow-100 border-2 border-yellow-300 font-semibold p-5 rounded-2xl text-center text-sm text-yellow-800">No posts matching your search yet, please check back later !</div>
        @endif

        
        @if ($author->posts->count() > 1)
            <x-post-list :posts="$author->posts" />
        @endif
    </main>

</x-layout>    
