@props(['title' => 'Dashboard', 'text' => null])
<div class="mb-12">
  <h1 class="font-bold text-5xl tracking-normal">{{ $title }}</h1>
  @if ($text)
    <p class="leading-5 mt-3.5 text-gray-200 text-sm">{{ $text }}</p>
  @endif
</div>
