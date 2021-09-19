@props(['src', 'name' => '', 'name' => 'U'])
@php
$avatarLetter = substr($name, 0, 1);
@endphp
<div class="flex-shrink-0 overflow-hidden w-full h-full">
  @if ($src)
    <img class="rounded-full" src="{{ asset('storage/' . $src) }}" alt="{{ $name }}">

  @else
    <span
      class="w-full h-full bg-indigo-700 rounded-full 
      bg-gradient-to-br from-green-400 to-blue-700 font-semibold
      inline-flex justify-center items-center">
      {{ $avatarLetter }}
    </span>
  @endif
</div>
