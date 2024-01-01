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
            <div class="grid grid-cols-2">
                <div class="text-3xl font-semibold">About</div>
                <div>
                    <p class="text-xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="flex gap-1 mt-5">
                        <div class="text-xl font-medium" style="width: 120px">Full Name:</div>
                        <span class="text-xl font-semibold">Tran Bao Trung</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-medium" style="width: 120px">Mobile:</div>
                        <span class="text-xl font-semibold">Tran Bao Trung</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-medium" style="width: 120px">Email:</div>
                        <span class="text-xl font-semibold">Tran Bao Trung</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-medium" style="width: 120px">Phone:</div>
                        <span class="text-xl font-semibold">Tran Bao Trung</span>
                    </div>
                    <div class="flex gap-1">
                        <div class="text-xl font-medium" style="width: 120px">Social:</div>
                        <span class="text-xl font-semibold">Tran Bao Trung</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>