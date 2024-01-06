@props(['blog'])

<section>
    <a href="/blogs/{{ $blog->id }}">
        <div class="transition ease-out duration-300 hover:rounded-lg hover:scale-105">
            <div style="width: 100%; height: 250px" class="rounded">
                <img class="w-full h-full rounded" src="{{ $blog->getImageUrl() }}" alt="Blog">
            </div>
            <div class="content mt-4">
                <div class="text-lg font-medium">New York . 20 Jan 2023</div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-semibold line-clamp-2">{{ $blog->blog_title }}</h3>
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                </div>
                <div class="overflow-hidden mt-4">
                    <p class="line-clamp-2">{{ $blog->blog_summary }}</p>
                </div>
                <div class="flex gap-3 mt-3">
                    @foreach($blog->categories as $category)
                        <a href="/?tag={{ $category->name }}"
                            class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10"
                        >
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </a>
</section>