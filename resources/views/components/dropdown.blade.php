<div x-data="{ open: false }" @click.away="open = false">
  <div @click="open = !open">
    {{ $trigger }}
  </div>
  <div
    class="
      absolute
      z-50
      bg-gray-100
      rounded-xl
      overflow-hidden
      top-10
      w-32
      min-w-max
      shadow-inner
      mt-2
      max-h-80 overflow-y-auto
    "
    x-show="open"
  >
    {{ $slot }}
  </div>
</div>
