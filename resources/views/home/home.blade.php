<x-layout>
    <div class="home flex justify-center mt-24">
        <div class="container mx-auto p-4">
            <div class="home-title text-center flex flex-col gap-4">
                <h5 class="text-2xl font-weight-normal">The blog</h5>
                <h2 class="text-5xl font-semibold">Writings from our team</h2>
                <p>The latest industry news, interviews, technologies, and resources</p>
            </div>
            <div class="banner mt-8">
                <x-banner-card />
            </div>
            <div class="blog-list grid grid-cols-4 gap-3 mt-12">
                @unless(count($blogs) == 0)
                    @foreach($blogs as $blog)
                        <x-blog-card :blog="$blog" />
                    @endforeach
                @else
                    <p>No blog found!!!</p>
                @endunless
            </div>
        </div>
    </div>
</x-layout>