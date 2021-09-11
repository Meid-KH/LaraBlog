@if(Session::has('success'))
    <div
      x-data="{ open: true }"
      x-init="setTimeout(() => open = false, 3000)"
      x-show="open"
      class="bg-green-200 border-2 border-green-400 
        bottom-5 fixed font-semibold leading-6 max-w-screen-sm px-6 py-4 
        right-5 rounded-xl text-green-700 text-sm w-max"
    >
      {{ Session::get('success') }}
      Congrats🎉, Your has been added toour Newsletter
    </div>
  @endif