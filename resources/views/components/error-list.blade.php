@props(['errors'])
<ul class="bg-red-50 border-2 border-red-400 my-3 p-3 rounded-xl space-y-1.5">
  @foreach ($errors->all() as $error)
  <li class="font-semibold text-red-500 text-xs">{{ $error }}</li>
  @endforeach
</ul>