<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Blog
            </h2>
            <p class="mb-4">Post a blog</p>
        </header>

        <form method="POST" action="/blog-create" enctype="multipart/form-data">
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
                <textarea class="border border-gray-200 rounded p-2 w-full" id="blog_content" name="blog_content"
                    placeholder="Example: Senior Laravel Developer"></textarea>
                @error('blog_content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Blog banner
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="blog_banner" />
                @error('blog_banner')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="blog_tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('blog_tags') }}" />
                @error('blog_tags')
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
