<x-layout>
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </p>

                <a href="{{ route('author', $post->author->id) }}" class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </a>
            </div>
            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="{{ route('posts') }}"
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>
                        Back to Posts
                    </a>

                    <div class="space-x-2">
                        <a 
                            href="{{ route('post', $post->category->slug) }}"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        >
                            {{ $post->category->name }}
                        </a>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-lg leading-loose"> {{ $post->body }} </div>
            </div>
            {{-- Comments section --}}
            <section class="col-span-8 col-start-5 mt-10">
                <h2 class="font-bold mb-6 text-4xl">Comments</h2>
                <div class="space-y-6">
                    <div class="bg-white border-2 border-gray-200 rounded-xl p-5">
                        <div class="flex items-center space-x-4">
                            <img class="border-2 border-blue-300 flex-shring-0 rounded-full rounded-xl" src="https://i.pravatar.cc/50/{{ auth()->id() }}" alt="Avatar">
                            <div class="space-y-1.5 w-full">
                                <div class="font-semibold text-bold tracking-wider">Want to join the discussion ?</div>
                            </div>
                        </div>
                        <form class="mt-5" method="POST" action="{{ route('store_comment', $post->slug) }} ">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea cols="30" name="body" rows="5" placeholder="Add comment..." class="border-b-2 focus:border-blue-400 font-semibold outline-none py-2 text-sm w-full"></textarea>

                            @if ($errors->any())
                                <ul class="space-y-1 my-3">
                                    @foreach ($errors->all() as $error)
                                        <li class="font-semibold text-red-500 text-xs tracking-wide">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="border-gray-200 flex justify-end mt-4 mb-1">
                                <button class="bg-blue-500 font-semibold hover:bg-blue-600 px-10 py-3 rounded-3xl select-none text-white tracking-wider">Publish</button>
                            </div>
                        </form>
                    </div>

                    @foreach ($post->comments as $comment)
                        <x-comment :comment="$comment"/>
                    @endforeach
    
                </div>

            </section>
        </article>
    </main>
</x-layout>

