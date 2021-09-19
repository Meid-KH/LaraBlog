<x-layout.admin>
  @slot('heading') {{ $user->name }} @endslot
  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot

  <section class="grid grid-cols-12 gap-6 items-start my-6">
    <div class="bg-gray-700 col-span-4 p-6 rounded-xl sticky top-24">
      <div class="mx-auto w-80 h-80 text-8xl">
        <x-admin.avatar src="{{ $user->avatar }}" name="{{ $user->name }}" />
      </div>
      <ul class="mt-6 space-y-3">
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Name</span> <span>{{ $user->name }}</span>
        </li>
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Email</span> <a class="hover:underline"
            href="mailto:{{ $user->email }}">{{ $user->email }}</a>
        </li>
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Age</span> <span>26</span>
        </li>
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Nombre of posts / published:</span>
          <span> {{ $user->posts->count() }} / {{ $user->posts->count() }} </span>
        </li>
      </ul>
    </div>

    <div class="col-span-8 px-5">
      <h2 class="font-bold text-5xl tracking-normal">
        {{ __('Posts Created') }}
      </h2>
      <div class="mt-10 space-y-5">
        @if ($user->posts->count())
          @foreach ($user->posts as $post)
            <a href="{{ route('post', $post->slug) }}" target="_blank"
              class="block rounded-xl py-5 px-6 bg-gray-700 text-gray-100 hover:bg-gray-600">
              <h3 class="font-bold mb-1.5 text-2xl tracking-wide">
                {{ ucwords($post->title) }}
              </h3>
              <p class=" font-light
                line-clamp-2 text-gray-300 text-sm tracking-wide">
                {{ $post->excerpt }}
              </p>
              <div class="font-light italic mt-3 text-gray-400 text-sm tracking-wide">
                {{ $post->comments->count() == 1 ? 'One comment' : $post->comments->count() . ' Comments' }}
              </div>
            </a>
          @endforeach
        @else
          <div
            class="
                  bg-opacity-40 bg-yellow-50 border-2 border-yellow-300 font-semibold p-5 rounded-2xl text-center">
            No posts yet for this user</div>
        @endif
      </div>
    </div>
  </section>
</x-layout.admin>
