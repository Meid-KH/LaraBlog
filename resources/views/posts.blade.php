<x-layout>
  <x-post-header :categories="$categories" />
  {{-- @dump($categories) --}}
  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
      <x-post-item-featured :post="$posts[0]" />
    @else
      <div
        class="bg-yellow-100 border-2 border-yellow-300 font-semibold p-5 rounded-2xl text-center text-sm text-yellow-800">
        No posts matching your search yet, please check back later !</div>
    @endif


    @if ($posts->count() > 1)
      <x-post-list :posts="$posts" />
    @endif
  </main>
  <div class="mt-5">
    {{ $posts->links() }}
  </div>

</x-layout>
