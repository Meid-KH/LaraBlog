<x-layout.admin>
  {{-- Title --}}
  <x-admin.dashboard-heading title="{{ ucwords($post->title) }}" text="Lorem ipsum dolor, dolorum! Quam alolor." />

  <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <!-- Validation Errors -->

    <form method="POST" action="{{ route('admin.post.update', $post->id) }}">
      @csrf
      @method('PATCH')
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
            id="title" type="text" name="title" value="{{ $post->title }}">
        </div>
        <div>
          <label class="block font-medium text-sm text-gray-700" for="slug">
            Slug
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="slug" type="text" name="slug" value="{{ $post->slug }}">
        </div>
        <div>
          <label class="block font-medium text-sm text-gray-700" for="excerpt">
            Excerpt
          </label>
          <input
            class="text-gray-800 text-sm rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            id="excerpt" type="text" name="excerpt" value="{{ $post->excerpt }}">
        </div>
        <div>
          <label class="block font-medium text-sm text-gray-700" for="body">
            Body
          </label>
          <textarea
            class="text-gray-800 text-sm rounded-md shadow-sm 
          border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
            focus:ring-opacity-50 block mt-1 w-full"
            name="body" id="body" rows="5">{{ $post->body }}</textarea>
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
              <option value="{{ $category->id }}"> {{ $category->name }} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="flex items-center justify-end mt-4">
        <button type="submit"
          class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">
          Register
        </button>
      </div>
    </form>
  </div>
</x-layout.admin>
