<x-layout.admin>
  <x-admin.dashboard-heading title="Posts" text="Lorem ipsum dolor, dolorum! Quam alolor." />
  @if ($posts->count())
    <div class="flex flex-col">
      <div class="-my-2 sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block sm:px-6 lg:px-8 max-w-full">
          <div class="border-b border-gray-600 overflow-x-auto sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-700">
              <thead class="bg-gray-900">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                    Author
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Title
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Excerpt
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Status
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-900 divide-gray-700 divide-y">
                @foreach ($posts as $post)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                            alt="">
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-300">
                            {{ $post->author->name }}
                          </div>
                          <a href="mailto:{{ $post->author->email }}"
                            class="block text-sm text-gray-400 hover:text-gray-200 hover:underline">
                            {{ $post->author->email }}
                          </a>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                      {{ $post->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap-- text-sm text-gray-300">
                      {{ $post->excerpt }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('admin.post', $post->slug) }}"
                        class="text-blue-500 hover:text-blue-400">Edit</a>
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
    <div class="mt-4 text-gray-300">
      {{ $posts->links() }}
    </div>
  @else
    <div class="bg-yellow-100 border-2 border-yellow-500 font-medium px-4 py-5 rounded-xl text-center text-yellow-700">
      {{ __('No post currently in the database') }}
    </div>
  @endif
</x-layout.admin>
