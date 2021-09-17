<x-layout.admin>
  @slot('heading') {{ $user->name }} @endslot
  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot

  <section class="grid grid-cols-12 gap-6 items-start my-6">
    <div class="bg-gray-700 col-span-4 p-6 rounded-xl sticky top-24">
      <img class="rounded-full mx-auto" src="{{ asset('storage/' . $user->avatar) }}" alt="User name">
      <ul class="mt-6 space-y-3">
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Name</span> <span>{{ $user->name }}</span>
        </li>
        <li class="bg-gray-800 flex gap-3 justify-between px-4 py-2 rounded-md">
          <span class="text-gray-400">Email</span> <span>{{ $user->email }}</span>
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
        Posts Created
      </h2>
      <div class="mt-10 space-y-5">
        @if ($user->posts->count())
          @foreach ($user->posts as $post)
            <a href="{{ route('post', $post->slug) }}" target="_blank"
              class="block rounded-md py-3 px-6 bg-gray-700 text-gray-100 hover:bg-gray-600">{{ $post->title }}</a>
          @endforeach
        @else
          <div class="">No posts yet !</div>
        @endif
      </div>
    </div>
  </section>
</x-layout.admin>
