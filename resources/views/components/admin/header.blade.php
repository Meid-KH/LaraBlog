<header class="bg-gray-900 p-5 sticky top-0">
  <div class="flex gap-5 items-center justify-end">
    <a href="{{ route('posts') }}" target="_blank"
      class="font-medium px-4 py-2 rounded-3xl text-sm 
          flex gap-3 items-center hover:bg-gray-700">View
      Blog</a>

    <x-dropdown>
      <x-slot name="trigger">
        <button
          class="font-medium bg-gray-800 px-4 py-2 rounded-3xl text-sm 
          flex gap-3 items-center hover:bg-gray-700">
          {{ auth()->user()->name }}
          <img class="-mr-4 -my-2 border-2 border-white flex-shring-0 rounded-full"
            src="{{ asset('storage/' . auth()->user()->avatar) }}" width="40" alt="Avatar">
        </button>
      </x-slot>
      <x-slot name="content">
        <div class="flex flex-col gap-1 max-h-60 overflow-y-auto py-2 
          text-gray-800 font-semibold">
          <a href="{{ route('admin.dashboard') }}"
            class="text-xs tracking-wide py-2 px-4 hover:bg-gray-800 hover:text-gray-200">Overview</a>
          <a href="{{ route('admin.profile') }}"
            class="text-xs tracking-wide py-2 px-4 hover:bg-gray-800 hover:text-gray-200">Profile</a>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();"
              class="block text-xs tracking-wide py-2 px-4 bg-red-500 text-white hover:bg-red-600">
              Log Out
            </a>
          </form>

        </div>
      </x-slot>
    </x-dropdown>
  </div>
</header>
