<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Admin | Lara Blog</title>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<body class="overflow-x-hidden" style="font-family: inter, nunito, sans-serif;">
  <div class="flex min-h-screen bg-gray-800 text-gray-100">
    {{-- Sidebar --}}
    <aside 
      class="bg-gray-900 h-100 h-screen px-8 pt-4 w-48 
      flex-shrink-0 border-gray-800 border-r-2">
      <div class="">
        <img src="/images/lary-avatar.svg" alt="Logo">
      </div>
      <ul class="mt-40 space-y-2">
        <li>
          <a 
            class="-mx-3 flex hover:bg-gray-800 px-5 py-2 rounded-3xl 
            {{ request()->routeIs('admin.dashboard') ? "bg-gray-700" : "" }}
            space-x-1 text-sm tracking-wider" 
            href="{{ route('admin.dashboard') }}">
            Overview
          </a>
        </li>
        <li>
          <a 
            class="-mx-3 flex hover:bg-gray-800 px-5 py-2 rounded-3xl 
            {{ request()->routeIs('admin.posts') ? "bg-gray-700" : "" }}
            space-x-1 text-sm tracking-wider" 
            href="{{ route('admin.posts') }}">
            Posts
          </a>
        </li>
        <li>
          <a 
            class="-mx-3 flex hover:bg-gray-800 px-5 py-2 rounded-3xl 
            {{ request()->routeIs('admin.categories') ? "bg-gray-700" : "" }}
            space-x-1 text-sm tracking-wider" 
            href="{{ route('admin.categories') }}">
            Categories
          </a>
        </li>
        <li>
          <a 
            class="-mx-3 flex hover:bg-gray-800 px-5 py-2 rounded-3xl 
            {{ request()->routeIs('admin.users') ? "bg-gray-700" : "" }}
            space-x-1 text-sm tracking-wider" 
            href="{{ route('admin.users') }}">
            Users
          </a>
        </li>
      </ul>
    </aside>
    {{-- Main --}}
    <main class="flex-1 min-h-screen max-w-full">
      <header class="bg-gray-900 p-5">
        <div class="flex gap-5 items-center justify-end">
          <a href="#" class="font-medium px-4 py-2 rounded-3xl text-sm 
                flex gap-3 items-center hover:bg-gray-700">View Blog</a>

          <x-dropdown>
            <x-slot name="trigger">
              <button 
                class="font-medium bg-gray-800 px-4 py-2 rounded-3xl text-sm 
                flex gap-3 items-center hover:bg-gray-700">
                John doe
                <img class="-mr-4 -my-2 border-2 border-white flex-shring-0 rounded-full" src="https://i.pravatar.cc/35/26" alt="Avatar">
              </button>
            </x-slot>
            <x-slot name="content">
              <div 
                class="flex flex-col gap-1 max-h-60 overflow-y-auto py-2 
                text-gray-800 font-semibold"
              >
                <a href="#" class="text-xs tracking-wide py-2 px-4 hover:bg-gray-800 hover:text-gray-200">Overview</a>
                <a href="#" class="text-xs tracking-wide py-2 px-4 hover:bg-gray-800 hover:text-gray-200">Profile</a>
                <a href="#" class="text-xs tracking-wide py-2 px-4 hover:bg-gray-800 hover:text-gray-200">Log Out</a>
              </div>
            </x-slot>
          </x-dropdown>
        </div>
      </header>
      <div class="py-8 px-10">
        <h1 class="font-bold mb-12 text-5xl tracking-normal">Dashboard Overview</h1>
        {{ $slot }}
      </div>
    </main>
  </div>
  <x-flash-message/>
</body>
</html>