<x-layout>
    <div class="categories flex justify-center mt-24">
        <div class="container">
            <div class="grid grid-cols-3 mb-12">
                <h2 class="text-5xl font-bold">Categories</h2>
                <div></div>
                <h4 class="text-2xl font-normal">New product features, the latest in technology, solutions and updates</h4>
            </div>
            <div>
                @include('partials._search')
            </div>
            <div class="flex gap-12 mt-14">
                <div class="text-xl font-medium">
                    <a href="{{ route('categories') }}">Default</a>
                </div>
                @foreach ($categories as $category)
                <div class="text-xl font-medium">
                    <a href="/categories/?tag={{ $category->name }}">{{ $category->name }}</a>
                </div>
                @endforeach
            </div>
            <div class="grid grid-cols-3 gap-5 mt-14">
                @unless(count($blogs) == 0)
                    @foreach($blogs as $blog)
                        <x-blog-category-card :blog="$blog" />
                    @endforeach
                @else
                    <p>No blog found!!!</p>
                @endunless
            </div>
            <div class="mt-6 p-4">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</x-layout>