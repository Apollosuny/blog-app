<x-layout>
    <div class="blog-detail mt-24">
        <div class="container mx-auto p-4">
            <div class="flex justify-between">
                <div class="flex items-center mb-3">
                    <ol class="list-none p-0 inline-flex space-x-2">
                        <li class="flex items-center">
                            <svg onclick="window.location.href='/';" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class="cursor-pointer hover:fill-blue-500 transition-colors duration-300" fill="#4b5563"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>        <span class="mx-2">/</span>
                        </li>
                        <li class="flex items-center">
                            <a 
                                href="{{ route('categories') }}" 
                                class="text-gray-600 hover:text-blue-500 transition-colors duration-300"
                            >
                                Categories
                            </a>
                        <span class="mx-2">/</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-gray-800">{{ $blog->blog_title }}</span>
                        </li>
                    </ol>
                </div>
                @if (auth()->user()->id == $blog->user_id)
                    <div class="flex gap-4">
                        <a class="
                        text-white 
                        bg-blue-700 
                        hover:bg-blue-800 
                        focus:ring-4 
                        focus:outline-none 
                        focus:ring-blue-300 
                        font-medium 
                        rounded-lg 
                        text-sm 
                        px-4 
                        py-2 
                        text-center 
                        dark:bg-blue-600 
                        dark:hover:bg-blue-700 
                        dark:focus:ring-blue-800" href="/blogs/{{ $blog->id }}/edit"
                        >
                            Edit
                        </a>
                        <form method="POST" action="/blogs/{{ $blog->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="
                                text-white 
                                bg-red-700
                                hover:bg-red-800 
                                focus:ring-4 
                                focus:outline-none 
                                focus:ring-red-300 
                                font-medium 
                                rounded-lg 
                                text-sm 
                                px-4 
                                py-2 
                                text-center 
                                dark:bg-red-600 
                                dark:hover:bg-red-700 
                                dark:focus:ring-red-800"
                            >
                                Delete
                            </button>
                        </form>
                    </div>
                @endif
            </div>
            <div class="flex gap-4 items-center mb-8">
                <div>{{ $blog->created_at->format('d/m/Y') }}</div>
                <div style="width: 1px; height: 30px; background-color: #000"></div>
                <div class="flex gap-3">
                    @foreach($blog->categories as $category)
                    <div 
                        class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"
                    >
                        {{ $category->name }}
                    </div>
                    @endforeach
                </div>
            </div>
            <h1 class="text-5xl font-semibold">{{ $blog->blog_title }}</h1>
            <div style="width: 100%; height: 1px; background-color: #000;" class="mt-10 mb-12"></div>
            <div>
                <div>
                    <img style="height: 400px; width: 100%" class="rounded" src="{{ $blog->getImageUrl() }}" alt="Banner">
                </div>
                <div style="margin-top: 80px" class="flex justify-between">
                    <div class="flex items-center gap-4">
                        <div style="width: 70px; height: 70px">
                            <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1698853983454-7e819026af6c?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar">
                        </div>
                        <div>
                            <span class="text-xl font-light">Author</span>
                            <h4 class="text-2xl font-semibold">{{ $blog->user->username }}</h4>
                        </div>
                    </div>
                    <div class="flex gap-9">
                        <div>
                            <span class="text-xl font-light">Time</span>
                            <h4 class="text-xl font-normal">2 min read</h4>
                        </div>
                        <div>
                            <span class="text-xl font-light">Read by</span>
                            <h4 class="text-xl font-medium">7.4K people</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 1px; background-color: #000;" class="mt-10 mb-12"></div>
            <div>
                <h3 class="mb-9 text-3xl font-semibold">{{ $blog->blog_title }}</h3>
                <div>
                    <p class="text-2xl font-normal">{!! $blog->blog_content !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>