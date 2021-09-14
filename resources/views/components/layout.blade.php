<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Laravel From Scratch Blog</title>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>
<link
  href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
  rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link
  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
  rel="stylesheet"
/>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
  <section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
      <div>
        <a href="/">
          <img
            src="/images/logo.svg"
            alt="Laracasts Logo"
            width="165"
            height="16"
          />
        </a>
      </div>

      <div class="flex items-center space-x-4 mt-8 md:mt-0">  
        <div class="text-xs uppercase space-x-2">
          @auth
            <div class="hidden sm:flex sm:items-center">
              <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                  <button 
                    class="
                    flex font-semibold items-center 
                    px-5 py-3 border-2 border-gray-200 
                    rounded-full text-xs uppercase
                  hover:bg-gray-100"
                  >
                    <div class="font-semibold">{{ Auth::user()->name }}</div>
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                  </button>
                </x-slot>
                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link 
                          :href="route('logout')"
                          onclick="event.preventDefault();
                          this.closest('form').submit();"
                          class="font-semibold text-xs capitalize"
                        >
                          {{ __('Log Out') }}
                        </x-dropdown-link>
                        @admin
                        <x-dropdown-link 
                          :href="route('admin.dashboard')"
                          class="font-semibold text-xs capitalize"
                        >
                          Dashboard
                        </x-dropdown-link>
                        @endadmin
                    </form>
                </x-slot>
              </x-dropdown>
            </div>
          @else
            <a href="{{ route('login') }}" class="font-bold hover:underline">
              login
            </a>
            <span class="font-semibold lowercase">or</span>
            <a href="{{ route('register') }}" class="font-bold hover:underline">
              Register
            </a>
          @endauth
        </div>  
        <a
          href="#newsletter"
          class="
            bg-blue-500
            hover:bg-blue-600
            border-2
            border-blue-500
            rounded-full
            text-xs
            font-semibold
            text-white
            uppercase
            py-3
            px-5
          "
        >
          Subscribe for Updates
        </a>
            
      </div>
    </nav>

    {{ $slot }}

    <footer
      class="
        bg-gray-100
        border border-black border-opacity-5
        rounded-xl
        text-center
        py-16
        px-10
        mt-16
      "
    >
      <img
        src="/images/lary-newsletter-icon.svg"
        alt=""
        class="mx-auto -mb-6"
        style="width: 145px"
      />
      <h5 class="text-3xl">Stay in touch with the latest posts</h5>
      <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

      <div class="mt-10 inline-flex flex-col">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
          <form id="newsletter" method="POST" action="{{ route('newsletter') }}" class="text-sm">
            @csrf
            <div class="lg:flex">
              <div class="lg:py-3 lg:px-5 flex items-center">
                <label for="email" class="hidden lg:inline-block">
                  <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
                </label>
  
                <input
                  name="email"
                  type="email"
                  placeholder="Your email address"
                  class="
                    lg:bg-transparent
                    py-2
                    lg:py-0
                    pl-4
                    focus-within:outline-none
                  "
                />
              </div>
  
              <button
                type="submit"
                class="
                  transition-colors
                  duration-300
                  bg-blue-500
                  hover:bg-blue-600
                  mt-4
                  lg:mt-0 lg:ml-3
                  rounded-full
                  text-xs
                  font-semibold
                  text-white
                  uppercase
                  py-3
                  px-8
                "
              >
                Subscribe
              </button>
            </div>
          </form>
        </div>
        @if ($errors->any())
          <x-error-list :errors="$errors"/>
        @endif
      </div>
    </footer>
  </section>
  <x-flash-message/>
</body>
</html>