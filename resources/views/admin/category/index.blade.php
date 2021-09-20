<x-layout.admin>
  @slot('heading') Categories @endslot
  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot
  @slot('actions')
    <x-admin.action url="{{ route('admin.category.create') }}">
      <span class="flex-shrink-0 w-5">
        <x-icon name="edit" />
      </span>
      New Category
    </x-admin.action>
  @endslot
  @if ($categories->count())
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="border-b border-gray-600 overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-700">
              <thead class="bg-gray-900">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Slug
                  </th>
                  <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Description
                  </th>
                  <th scope="col"
                    class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                    Posts Count
                  </th>
                  <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-gray-900 divide-gray-200 divide-y">
                @foreach ($categories as $category)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap--">
                      {{ $category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-xs">
                      {{ $category->slug }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap-- text-sm">
                      <div class="line-clamp-3">
                        {{ $category->description }}
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{ $category->posts->count() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <div class="flex items-center gap-3">
                        <a href="{{ route('admin.category.edit', $category->slug) }}"
                          class="text-blue-500 hover:text-blue-400 hover:underline">Edit</a>
                        <form onclick="
                          event.preventDefault();
                          if(confirm('Sure, you want to delete this record ?'))
                          this.submit();
                            // console.log('You deleted it')
                          " method="POST" action="{{ route('admin.category.delete', $category->id) }}">
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
    <div class="mt-4 text-gray-300">
      {{ $categories->links() }}
    </div>
  @else
    <div class="bg-yellow-100 border-2 border-yellow-500 font-medium px-4 py-5 rounded-xl text-center text-yellow-700">
      {{ __('No post currently in the database') }}
    </div>
  @endif
</x-layout.admin>
