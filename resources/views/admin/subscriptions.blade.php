<x-layout.admin>
  @slot('heading') {{ __('Newsletter') }} @endslot
  @slot('headingText')
    {{ __('Lorem ipsum set dolor consecturor zit amet') }}
  @endslot

  <h2 class="text-2xl font-bold text-gray-200">
    {{ __('List of emails') }}
  </h2>

  @if ($list)
    <div class="mt-6 max-w-md space-y-3">
      @foreach ($list->members as $member)
        <a href="mailto:{{ $member->email_address }}"
          class="block text-center p-4 bg-gray-900 rounded-xl hover:bg-gray-700">
          {{ $member->email_address }}
        </a>
      @endforeach
    </div>
  @else
    <div class="bg-opacity-30 bg-yellow-100 font-mediuem mt-5 px-4 py-6 rounded-xl text-center tracking-wide">
      {{ __('There are no emails yet in this list') }}
    </div>
  @endif

</x-layout.admin>
