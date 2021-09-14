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
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body class="overflow-x-hidden" style="font-family: inter, nunito, sans-serif;">
  <div class="bg-gray-800 grid grid-cols-12 min-h-screen text-gray-100">
    {{-- Sidebar --}}
    <x-admin.sidebar />
    {{-- Main --}}
    <main class="col-span-10 flex-1 max-w-full min-h-screen">
      {{-- Header --}}
      <x-admin.header />
      <div class="py-8 px-10">
        {{ $slot }}
      </div>
    </main>
  </div>
  <x-flash-message />
</body>

</html>
