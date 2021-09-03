<x-layout>
    <x-post-header :categories="$categories"/>
    {{-- @dump($categories) --}}
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
