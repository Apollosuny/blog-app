<x-layout>
    <div class="categories flex justify-center mt-24">
        <div class="container">
            <div class="grid grid-cols-3 mb-12">
                <h2 class="text-5xl font-bold">Categories</h2>
                <div></div>
                <h4 class="text-2xl font-normal">New product features, the latest in technology, solutions and updates</h4>
            </div>
            <div>
                <div>
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search here..." 
                        class="py-3 px-5 border rounded-xl w-72" 
                    />
                    <button class="py-3 px-5 bg-black text-white rounded-xl">Search</button>
                </div>
            </div>
            <div class="flex gap-12 mt-14">
                <div class="text-xl font-medium">
                    <a href="">Default</a>
                </div>
                <div class="text-xl font-medium">
                    <a href="">Default</a>
                </div>
                <div class="text-xl font-medium">
                    <a href="">Default</a>
                </div>
                <div class="text-xl font-medium">
                    <a href="">Default</a>
                </div>
                <div class="text-xl font-medium">
                    <a href="">Default</a>
                </div>
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
        </div>
    </div>
</x-layout>