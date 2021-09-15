<x-layout.admin>
  @slot('heading') Categories @endslot
  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot
  @slot('actions')
    <x-admin.action url="#">
      New Category
    </x-admin.action>
  @endslot

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
                  Title
                </th>
                <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                  Status
                </th>
                <th scope="col" class="font-medium px-6 py-3 text-gray-300 text-left text-xs tracking-wider uppercase">
                  Role
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-gray-900 divide-gray-200 divide-y">
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
                        Jane Cooper
                      </div>
                      <div class="text-sm text-gray-500">
                        jane.cooper@example.com
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-300">Regional Paradigm Technician</div>
                  <div class="text-sm text-gray-500">Optimization</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span
                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  Admin
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-blue-500 hover:text-blue-400">Edit</a>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-layout.admin>
