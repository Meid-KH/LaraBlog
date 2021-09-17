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
                    Badge
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
                        <div class="flex-shrink-0 w-16 h-16">
                          <img class="rounded-full" src="{{ asset('storage/' . $user->avatar) }}" alt="">
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-300 hover:underline">
                            {{ $user->name }}
                          </div>
                          {{-- <a href="mailto:zkovacek@example.com" class="block text-sm text-gray-400 hover:text-gray-200 hover:underline">
                            zkovacek@example.com
                          </a> --}}
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
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Admin
                      </span>
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
