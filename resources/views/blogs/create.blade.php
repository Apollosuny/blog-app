<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Blog
            </h2>
            <p class="mb-4">Post a blog</p>
        </header>

        <form method="POST" action="/blog-create">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Blog title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="blog_title" value="{{ old('blog_title') }}" />
                @error('blog_title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Blog content</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="blog_content"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('blog_content') }}" />
                @error('blog_content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Blog
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
