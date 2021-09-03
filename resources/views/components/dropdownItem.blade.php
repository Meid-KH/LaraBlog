@props(['active' => false])
@php
  $classes = "block font-semibold px-4 py-2 text-xs hover:bg-gray-300";
  if ($active) $classes .= " bg-blue-500 text-white";
@endphp
<a 
  {{ $attributes(
    ['class' => $classes]
  ) }}
>
  {{ $slot }}
</a>