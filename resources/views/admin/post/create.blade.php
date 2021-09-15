<x-layout.admin>
  @slot('heading') New post @endslot

  @slot('headingText') Lorem ipsum dolor, dolorum! Quam alolor @endslot

  @slot('actions')
    <x-admin.action url="{{ route('admin.post.create') }}">
      New Post
    </x-admin.action>
  @endslot

  <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <!-- Validation Errors -->

    <form method="POST" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
      @csrf
      @if ($errors->any())
        <x-error-list :errors="$errors" />
      @endif
      <div class="space-y-6">
        <div>
          <label class="block font-medium text-sm text-gray-700" for="title">
            Title
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="title" type="text" name="title" value="{{ old('title') }}">
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
          <label class="block font-medium text-sm text-gray-700" for="excerpt">
            Excerpt
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="excerpt" type="text" name="excerpt" value="{{ old('excerpt') }}">
        </div>

        <div>
          <label class="block font-medium text-sm text-gray-700" for="body">
            Body
          </label>
          <textarea
            class="text-gray-800 text-sm rounded-md shadow-sm 
          border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 block mt-1 w-full"
            name="body" id="body" rows="5">{{ old('body') }}</textarea>
        </div>

        <div>
          <label class="block font-medium text-sm text-gray-700" for="category">
            Category
          </label>
          <select
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="category" type="text" name="category">
            <option disabled selected>---- Select Category ----</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">
                {{ ucwords($category->name) }}
              </option>
            @endforeach
          </select>
        </div>
        <div>
          <label class="block font-medium text-sm text-gray-700" for="thumbnail">
            Thumbnail
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="thumbnail" type="file" name="thumbnail" value="{{ old('thumbnail') }}">
        </div>
      </div>

      <div class="flex gap-3 items-center justify-between mt-6">
        <a href="{{ route('admin.posts') }}"
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
