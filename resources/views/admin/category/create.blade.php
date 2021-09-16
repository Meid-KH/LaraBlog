<x-layout.admin>
  @slot('heading') New Category @endslot

  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot

  @slot('actions')
    <x-admin.action url="{{ route('admin.category.create') }}">
      New Category
    </x-admin.action>
  @endslot

  <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <!-- Validation Errors -->

    <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
      @csrf
      @if ($errors->any())
        <x-error-list :errors="$errors" />
      @endif
      <div class="space-y-6">
        <div>
          <label class="block font-medium text-sm text-gray-700" for="name">
            Name
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="name" type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
          <label class="block font-medium text-sm text-gray-700" for="slug">
            Slug
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="slug" type="text" name="slug" value="{{ old('slug') }}">
        </div>

        <div>
          <label class="block font-medium text-sm text-gray-700" for="description">
            Description
          </label>
          <textarea
            class="text-gray-800 text-sm rounded-md shadow-sm 
          border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 block mt-1 w-full"
            name="description" id="description" rows="5">{{ old('description') }}</textarea>
        </div>
      </div>

      <div class="flex gap-3 items-center justify-between mt-6">
        <a href="{{ route('admin.category.index') }}"
          class="active:bg-gray-200 text-gray-800 border-2 
          border-gray-800 disabled:opacity-25 duration-150 ease-in-out 
          focus:border-gray-800 focus:outline-none focus:ring font-semibold 
          hover:bg-gray-200 inline-flex items-center px-6 py-3 ring-gray-300 rounded-md 
          text-xs tracking-widest transition uppercase">
          Annuller</a>
        <button type="submit"
          class="active:bg-gray-900 bg-gray-800 border-2 border-transparent disabled:opacity-25 duration-150 ease-in-out focus:border-gray-900 focus:outline-none focus:ring font-semibold hover:bg-gray-700 inline-flex items-center px-6 py-3 ring-gray-300 rounded-md text-white text-xs tracking-widest transition uppercase">
          Register
        </button>
      </div>
    </form>
  </div>
</x-layout.admin>
