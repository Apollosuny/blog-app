@props(['blog'])

<section>
    <a href="/blogs/{{ $blog->blog_slug }}">
        <div style="width: 100%; height: 250px" class="rounded">
            <img class="w-full h-full rounded" src="{{ asset('images/blog.jpg') }}" alt="Blog">
        </div>
        <div class="content mt-8">
            <div class="text-lg font-medium">New York . 20 Jan 2023</div>
            <div class="flex justify-between items-center">
                <h3 class="text-2xl font-semibold">{{ $blog->blog_title }}</h3>
                <a href="/">Icon</a>
            </div>
            <div class="overflow-hidden">
                <p class="line-clamp-2">{{ $blog->blog_summary }}</p>
            </div>
            <div class="flex gap-3 mt-3">
                <div class="border border-gray-200 rounded-lg px-3 py-1">
                    Design
                </div>
                <div class="border border-gray-200 rounded-lg px-3 py-1">
                    Research
                </div>
                <div class="border border-gray-200 rounded-lg px-3 py-1">
                    Design
                </div>
            </div>
        </div>
    </a>
</section>