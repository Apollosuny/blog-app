<x-layout>
    <div class="container mx-auto px-4 my-3">
        <div class="grid grid-cols-4 mt-24">
            <div class="col-span-1">
                <h2 class="text-3xl font-semibold">Create new Blog</h2>
            </div>
            <div class="col-span-3">
                <div class="bg-white shadow-md rounded-lg p-5 w-full mx-auto">
            
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
                            <textarea class="border border-gray-200 rounded p-2 w-full" id="editor" name="blog_content"
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
                            <button class="bg-laravel text-white rounded py-2 px-4 bg-black hover:bg-slate-800">
                                Create Blog
                            </button>
            
                            <a href="/" class="text-black ml-4 hover:border rounded py-2 px-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<script>
    ClassicEditor
        .create(document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: "{{ route('upload', ['_token'=>csrf_token()]) }}"
            }
        })
        .catch( error => {
            console.error( error );
        } );
</script>

