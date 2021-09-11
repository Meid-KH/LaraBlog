@props(['categories', 'currentCategory'])
<header class="max-w-xl mx-auto mt-20 text-center">
  <h1 class="text-4xl">
    Latest <span class="text-blue-500">Laravel From Scratch</span> News
  </h1>

  {{-- <h2 class="inline-flex mt-2">
    By Lary Laracore
    <img src="/images/lary-head.svg" alt="Head of Lary the mascot" />
  </h2> --}}

  <p class="text-sm mt-4">
    Another year. Another update. We're refreshing the popular Laravel series
    with new content. I'm going to keep you guys up to speed with what's going
    on!
  </p>

  <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
    <!--  Category -->
    @if ($categories->count() > 0)
      <div class="relative flex lg:inline-flex items-center">
        <x-dropdown align="left">
          <x-slot name="trigger">
            <button 
              class="flex-1 
              flex lg:inline-flex items-center
              relative
              w-40
              rounded-xl
              bg-gray-100
              py-2
              pl-3
              pr-9
              text-sm
              font-semibold
              cursor-pointer"
            >
              <span class="inline-block truncate">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Categories" }}
              </span>
              <x-icon name="caret" class="transform -rotate-90 absolute pointer-events-none" style="right: 12px"/>
            </button>
          </x-slot>
          <x-slot name="content">
            <ul class="text-left py-2 max-h-60 overflow-y-auto">
              <li>
                <x-dropdownItem href="{{ route('posts') }}" :active="request()->routeIs('posts')">
                  All
                </x-dropdownItem>
              </li>
              {{-- @dump($categories) --}}
              @foreach ($categories as $category)
                <li>
                  <x-dropdownItem href="/category/{{ $category->slug }}" :active="request()->is('/category/{{ $category->slug}}')">
                  {{ $category->name }}
                  </x-dropdownItem>
                </li>
              @endforeach
            </ul>
        </x-slot>
        </x-dropdown>
      </div>
    @endif

    <!-- Search -->
    <div
      class="
        relative
        flex
        lg:inline-flex
        items-center
        bg-gray-100
        rounded-xl
        px-3
        py-2
      "
    >
      <form method="GET" action="{{route('posts')}}">
        <input
          type="text"
          name="search"
          value="{{ request('search') }}"
          placeholder="Find something"
          class="bg-transparent placeholder-black font-semibold text-sm"
        />
      </form>
    </div>
  </div>
</header>
