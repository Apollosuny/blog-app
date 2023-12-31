@props(['blog'])

<section>
    <a href="/blogs/{{ $blog->id }}">
        <div style="width: 100%; height: 310px" class="rounded relative">
            <img class="w-full h-full rounded" src="{{ $blog->getImageUrl() }}" alt="Blog" />
            <div class="bg-slate-400 opacity-75 p-6 absolute w-full bottom-0 flex justify-between rounded">
                <div class="flex flex-col opacity-100">
                    <span class="text-base font-extrabold">Apollosuny</span>
                    <span class="text-sm font-medium">20 Jan, 2023</span>
                </div>
                <div class="opacity-100">
                    @foreach($blog->categories as $category)
                    <div 
                        class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"
                    >
                        {{ $category->name }}
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="content mt-8">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-semibold">{{ $blog->blog_title }}</h3>
            </div>
            <div class="overflow-hidden mt-4">
                <p class="line-clamp-2">{{ $blog->blog_summary }}</p>
            </div>
            <div class="flex mt-3">
                <a href="/blogs/{{ $blog->id }}">Read post</a>
            </div>
        </div>
    </a>
</section>