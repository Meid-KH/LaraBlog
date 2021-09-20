<aside class="bg-gray-900 border-r-2 border-gray-700 
  col-span-2 h-100 h-screen pt-4 px-8 sticky top-0 left-0">
  <a href="{{ route('admin.dashboard') }}" class="block pt-3">
    <img class="mx-auto" src="/images/lary-avatar.svg" alt="Logo">
  </a>
  <ul class="mt-40 space-y-2">
    <li>
      <a class="-mx-3 flex items-center gap-2.5 hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}
        space-x-1 text-sm tracking-wider"
        href="{{ route('admin.dashboard') }}">
        <span class="flex-shrink-0 w-6">
          <x-icon name="dashboard" />
        </span>
        {{ __('Overview') }}
      </a>
    </li>
    <li>
      <a class="-mx-3 flex items-center gap-2.5 hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.posts') ? 'bg-gray-700' : '' }}
        space-x-1 text-sm tracking-wider"
        href="{{ route('admin.posts') }}">
        <span class="flex-shrink-0 w-6">
          <x-icon name="edit" />
        </span>
        {{ __('Posts') }}
      </a>
    </li>
    <li>
      <a class="-mx-3 flex items-center gap-2.5 hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.category.index') ? 'bg-gray-700' : '' }}
        space-x-1 text-sm tracking-wider"
        href="{{ route('admin.category.index') }}">
        <span class="flex-shrink-0 w-6">
          <x-icon name="layers" />
        </span>
        {{ __('Categories') }}
      </a>
    </li>
    <li>
      <a class="-mx-3 flex items-center gap-2.5 hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.users') ? 'bg-gray-700' : '' }}
        space-x-1 text-sm tracking-wider"
        href="{{ route('admin.user.index') }}">
        <span class="flex-shrink-0 w-6">
          <x-icon name="users" />
        </span>
        {{ __('Authors') }}
      </a>
    </li>
    <li>
      <a class="-mx-3 flex items-center gap-2.5 hover:bg-gray-800 px-5 py-2 rounded-3xl 
        {{ request()->routeIs('admin.subscriptions') ? 'bg-gray-700' : '' }}
        space-x-1 text-sm tracking-wider"
        href="{{ route('admin.subscriptions') }}">
        <span class="flex-shrink-0 w-6">
          <x-icon name="mail" />
        </span>
        {{ __('Subscriptions') }}
      </a>
    </li>
  </ul>
</aside>
