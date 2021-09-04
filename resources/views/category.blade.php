<x-layout>
    {{-- <header class="mb-5">
        <h1 class="text-uppercase mb-3"> {{ $category->name }} </h1>
        <p class="lead">
            {{ $category->description }} 
        </p>
    </header> --}}
    <x-post-header :categories="$categories" :currentCategory="$currentCategory"/>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($category->posts->count())
            <x-post-item-featured :post="$category->posts[0]" />
        @else
            <div class="bg-yellow-100 border-2 border-yellow-300 font-semibold p-5 rounded-2xl text-center text-sm text-yellow-800">No posts matching your search yet, please check back later !</div>
        @endif
        
        @if ($category->posts->count() > 1)
            <x-post-list :posts="$category->posts" />
        @endif
    </main>
</x-layout>