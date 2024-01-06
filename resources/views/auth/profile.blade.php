<x-layout>
    <div class="profile">
        <div style="height: 400px">
            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1503437313881-503a91226402?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar">
        </div>
        <div class="container mx-auto p-4">
            <div class="flex justify-between bg-slate-200 p-4 rounded-lg relative bottom-32">
                <div class="flex gap-7 items-center">
                    <div style="width: 200px; height: 200px">
                        <img 
                            src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Banner"
                            class="w-full h-full object-cover rounded-full"
                        >
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="text-4xl font-bold">Tran Bao Trung</div>
                        <div class="text-2xl font-normal">I’m designer from Vietnam</div>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex justify-end gap-5">
                        <a href="/profile" type="button"
                                class="
                                    w-fit
                                    flex
                                    items-center
                                    gap-1
                                    text-white 
                                    bg-blue-700 
                                    hover:bg-blue-800 
                                    focus:ring-4 
                                    focus:outline-none 
                                    focus:ring-blue-300 
                                    font-medium 
                                    rounded-lg 
                                    text-sm 
                                    px-4 
                                    py-2 
                                    text-center 
                                    dark:bg-blue-600 
                                    dark:hover:bg-blue-700 
                                    dark:focus:ring-blue-800"
                            >
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>
                                Follow
                            </a>
                            <a href="{{ route('edit_profile') }}" type="button"
                            class="
                                w-fit
                                flex
                                items-center
                                gap-1
                                text-white 
                                bg-blue-700 
                                hover:bg-blue-800 
                                focus:ring-4 
                                focus:outline-none 
                                focus:ring-blue-300 
                                font-medium 
                                rounded-lg 
                                text-sm 
                                px-4 
                                py-2 
                                text-center 
                                dark:bg-blue-600 
                                dark:hover:bg-blue-700 
                                dark:focus:ring-blue-800"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </a>
                    </div>
                        <div class="flex gap-8">
                            <div class="flex flex-col">
                                <div class="text-xl font-medium">Followers</div>
                                <div class="text-3xl font-semibold">13,000</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-xl font-medium">Following</div>
                                <div class="text-3xl font-semibold">9000</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-xl font-medium">Liked</div>
                                <div class="text-3xl font-semibold">9432</div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="grid grid-cols-4">
                <div class="text-3xl font-semibold col-span-1">About</div>
                <div class="col-span-3">
                    <p class="text-xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="flex gap-1 mt-5">
                        <div class="text-xl font-normal" style="width: 120px">Full Name:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-normal" style="width: 120px">Mobile:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->phone }}</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-normal" style="width: 120px">Email:</div>
                        <span class="text-xl font-semibold">{{ $user->email }}</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-normal" style="width: 120px">Location:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->address }}</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-normal" style="width: 120px">Social:</div>
                        <div class="inline-block">
                            <a class="font-semibold" href="{{ $user->profile->facebook_account }}">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 mt-10">
                <div class="text-3xl font-semibold col-span-1">
                    Blogs
                    <a href="{{ route('achieve') }}">Achive Blog</a>
                </div>
                <div class="grid grid-cols-2 gap-8 col-span-3">
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
    </div>
</x-layout>