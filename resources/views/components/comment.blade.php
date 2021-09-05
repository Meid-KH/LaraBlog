@props(['comment'])
<div
  class="
    bg-gray-100
    border-2 border-gray-200
    flex
    items-start
    p-4
    rounded-xl
    space-x-4
  "
>
  <img
    class="border-2 border-blue-300 flex-shring-0 rounded-full rounded-xl"
    src="https://i.pravatar.cc/100/{{$comment->author->id}}"
    alt="Avatar"
  />
  <div class="space-y-1.5 w-full">
    <div class="font-semibold text-bold text-sm">
      {{ $comment->author->name }}
    </div>
    <div class="text-gray-500 text-xs">
      posted <time> {{ $comment->created_at->diffForHumans() }} </time>
    </div>
    <div class="space-y-3.5 pt-3 leading-5 text-gray-500 text-sm">
      {{ $comment->body }}
    </div>
  </div>
</div>
