<x-layout.admin>
  @slot('heading') {{ __('Overview') }} @endslot

  <div class="grid grid-cols-12 items-start gap-10">
    @if ($posts)
      <a href="{{ route('admin.posts') }}"
        class="hover:bg-gray-700 bg-gray-900 col-span-full md:col-span-6 lg:col-span-4 xl:col-span-3 px-5 py-14 rounded-xl text-center">
        <div class="font-black text-8xl text-gray-50">
          {{ $posts->count() }}
        </div>
        <div class="font-semibold mt-4 text-xl tracking-wide uppercase">{{ __('Posts') }}</div>
      </a>
    @endif

    @if ($categories)
      <a href="{{ route('admin.category.index') }}"
        class="hover:bg-gray-700 bg-gray-900 col-span-full md:col-span-6 lg:col-span-4 xl:col-span-3 px-5 py-14 rounded-xl text-center">
        <div class="font-black text-8xl text-gray-50">
          {{ $posts->count() }}
        </div>
        <div class="font-semibold mt-4 text-xl tracking-wide uppercase">{{ __('Categories') }}</div>
      </a>
    @endif

    @if ($authors)
      <a href="{{ route('admin.user.index') }}"
        class="hover:bg-gray-700 bg-gray-900 col-span-full md:col-span-6 lg:col-span-4 xl:col-span-3 px-5 py-14 rounded-xl text-center">
        <div class="font-black text-8xl text-gray-50">
          {{ $authors->count() }}
        </div>
        <div class="font-semibold mt-4 text-xl tracking-wide uppercase">{{ __('Authors') }}</div>
      </a>
    @endif

    @if ($comments)
      <a href="#"
        class="hover:bg-gray-700 bg-gray-900 col-span-full md:col-span-6 lg:col-span-4 xl:col-span-3 px-5 py-14 rounded-xl text-center">
        <div class="font-black text-8xl text-gray-50">
          {{ $comments->count() }}
        </div>
        <div class="font-semibold mt-4 text-xl tracking-wide uppercase">{{ __('Comments') }}</div>
      </a>
    @endif

    @if ($subscribers)
      <a href="{{ route('admin.subscriptions') }}"
        class="hover:bg-gray-700 bg-gray-900 col-span-full md:col-span-6 lg:col-span-4 xl:col-span-3 px-5 py-14 rounded-xl text-center">
        <div class="font-black text-8xl text-gray-50">
          {{ $subscribers->total_items }}
        </div>
        <div class="font-semibold mt-4 text-xl tracking-wide uppercase">{{ __('subscribers') }}</div>
      </a>
    @endif

  </div>

</x-layout.admin>
