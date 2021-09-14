<aside 
  class="bg-gray-900 border-r-2 border-gray-700 
  col-span-2 h-100 h-screen pt-4 px-8 sticky top-0 left-0"
>
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
    <li>
      <a 
        class="-mx-3 flex hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.subscriptions') ? "bg-gray-700" : "" }}
        space-x-1 text-sm tracking-wider" 
        href="{{ route('admin.subscriptions') }}">
        Subscriptions
      </a>
    </li>
  </ul>
</aside>