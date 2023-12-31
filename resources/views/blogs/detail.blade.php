<x-layout>
    <div class="blog-detail">
        <div class="container mx-auto p-4">
            <div class="flex gap-4 items-center mb-8">
                <div>{{ $blog->created_at }}</div>
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
            <div style="width: 100%; height: 1px; background-color: #000;" class="mt-10 mb-12"></div>
            <div>
                <h3 class="mb-9 text-3xl font-semibold">{{ $blog->blog_title }}</h3>
                <div>
                    <p class="text-2xl font-normal">{{ $blog->blog_content }}</p>
                    {{-- <p class="text-2xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="text-2xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="text-2xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>