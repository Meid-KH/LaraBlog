<x-layout.admin>
  @slot('heading') Users List @endslot
  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot

  @if ($users->count())
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="border-b border-gray-600 overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-700">
              <thead class="bg-gray-900">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                    ID
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Email
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Published Posts
                  </th>
                  <th scope="col"
                    class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Role
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Remove</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-900 divide-gray-200 divide-y">
                @foreach ($users as $user)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap--">
                      {{ $user->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap--">
                      <a href="{{ route('admin.user.show', $user->id) }}" class="flex items-center">
                        <div class="w-10 h-10">
                          <x-admin.avatar src="{{ $user->avatar }}" name="{{ $user->name }}" />
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-300 hover:underline">
                            {{ $user->name }}
                          </div>
                        </div>
                      </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs">
                      <a class="hover:underline" href="mailto:{{ $user->email }}">
                        {{ $user->email }}
                      </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs">
                      {{ $user->posts->count() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{-- @if ($user->role == 'admin')
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          {{ $user->role }}
                        </span>
                      @elseif($user->role =='super-admin' )
                        <button
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-200 text-blue-800">
                          Make as admin
                        </button>
                      @else
                        -----
                      @endif --}}
                      @if ($user->role)
                        <span
                          class="px-3 py-1 block text-center text-xs leading-5 
                          font-semibold rounded-full 
                          @if ($user->role == 'super admin') 
                          text-red-700 bg-red-200
                          @else
                          bg-green-100 text-green-800
                          @endif
                          ">
                          {{ ucwords($user->role) }}
                        </span>
                      @else
                        @if (Auth::user()->can('super-admin'))

                          <form action="{{ route('admin.user.makeAdmin', $user->id) }}" method="POST" onclick="
                            event.preventDefault();
                            if(confirm('Sure, you want to make this user as Admin ?'))
                            this.submit();
                              // console.log('You deleted it')
                            ">
                            @csrf
                            @method('PUT')
                            <button
                              class="bg-blue-500 block font-light leading-5 px-3 py-1 
                              rounded-full text-center text-white tracking-wide w-full hover:bg-blue-600">
                              {{ ucwords('Make as admin') }}
                            </button>
                          </form>

                        @else
                          <span class="block text-center">__</span>
                        @endif
                      @endif

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <div class="flex items-center gap-3">
                        <form onclick="
                            event.preventDefault();
                            if(confirm('Sure, you want to delete this record ?'))
                            this.submit();
                              // console.log('You deleted it')
                            " method="POST" action="{{ route('admin.user.delete', $user->id) }}">
                          @csrf
                          @method("DELETE")
                          <button class="text-red-500 hover:text-red-400 hover:underline">
                            Delete
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach

                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="bg-yellow-100 border-2 border-yellow-500 font-medium px-4 py-5 rounded-xl text-center text-yellow-700">
      {{ __('No post currently in the database') }}
    </div>
  @endif

</x-layout.admin>
