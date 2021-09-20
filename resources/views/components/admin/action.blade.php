@props(['url' => '#'])

<a href="{{ $url }}"
  class="bg-blue-100 font-semibold inline-flex gap-2 items-center px-8 py-3 rounded-full text-blue-800 text-medium">
  {{ $slot }}
</a>
