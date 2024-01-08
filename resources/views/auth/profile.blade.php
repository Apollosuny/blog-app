<x-layout>
    <div class="profile">
        <div style="height: 400px">
            <img class="h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1503437313881-503a91226402?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Avatar">
        </div>
        <div class="container mx-auto p-4">
            <div class="flex justify-between bg-white shadow-lg p-4 rounded-lg relative bottom-32">
                <div class="flex gap-7 items-center">
                    <div style="width: 200px; height: 200px">
                        <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Banner" class="w-full h-full object-cover rounded-full">
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
                                    dark:focus:ring-blue-800">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                                dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
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
                    <p class="text-xl font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="flex gap-1 mt-5">
                        <div class="text-xl font-normal" style="width: 120px">Full Name:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->first_name }}
                            {{ $user->profile->last_name }}</span>
                    </div>
                    <div class="flex gap-1 mt-3">
                        <div class="text-xl font-normal" style="width: 120px">Mobile:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->phone }}</span>
                    </div>
                    <div class="flex gap-1 mt-3">
                        <div class="text-xl font-normal" style="width: 120px">Email:</div>
                        <span class="text-xl font-semibold">{{ $user->email }}</span>
                    </div>
                    <div class="flex gap-1 mt-3">
                        <div class="text-xl font-normal" style="width: 120px">Location:</div>
                        <span class="text-xl font-semibold">{{ $user->profile->address }}</span>
                    </div>
                    <div class="flex gap-1 mt-3">
                        <div class="text-xl font-normal" style="width: 120px">Social:</div>
                        <div class="inline-flex gap-5">
                            @if($user->profile->facebook_account)
                            <a
                                href="{{ $user->profile->facebook_account }}"
                                class="font-semibold flex gap-2 items-center"
                            >
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_17_24)">
                                        <path d="M48 24C48 10.7453 37.2547 0 24 0C10.7453 0 0 10.7453 0 24C0 35.255 7.74912 44.6995 18.2026 47.2934V31.3344H13.2538V24H18.2026V20.8397C18.2026 12.671 21.8995 8.8848 29.9194 8.8848C31.44 8.8848 34.0637 9.18336 35.137 9.48096V16.129C34.5706 16.0694 33.5866 16.0397 32.3645 16.0397C28.4294 16.0397 26.9088 17.5306 26.9088 21.4061V24H34.7482L33.4013 31.3344H26.9088V47.8243C38.7926 46.3891 48.001 36.2707 48.001 24H48Z" fill="#0866FF"/>
                                        <path d="M33.4003 31.3344L34.7472 24H26.9078V21.4061C26.9078 17.5306 28.4285 16.0397 32.3635 16.0397C33.5856 16.0397 34.5696 16.0694 35.136 16.129V9.48096C34.0627 9.1824 31.439 8.8848 29.9184 8.8848C21.8986 8.8848 18.2016 12.671 18.2016 20.8397V24H13.2528V31.3344H18.2016V47.2934C20.0582 47.7542 22.0003 48 23.999 48C24.983 48 25.9536 47.9395 26.9069 47.8243V31.3344H33.3994H33.4003Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_17_24">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                </div>
                                <div>{{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                </div>
                            </a>
                            @endif

                            @if($user->profile->instagram_account)
                            <a
                                href="{{ $user->profile->instagram_account }}"
                                class="font-semibold flex gap-2 items-center"
                            >
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_17_27)">
                                        <path d="M24 4.32187C30.4125 4.32187 31.1719 4.35 33.6938 4.4625C36.0375 4.56562 37.3031 4.95938 38.1469 5.2875C39.2625 5.71875 40.0688 6.24375 40.9031 7.07812C41.7469 7.92188 42.2625 8.71875 42.6938 9.83438C43.0219 10.6781 43.4156 11.9531 43.5188 14.2875C43.6313 16.8187 43.6594 17.5781 43.6594 23.9813C43.6594 30.3938 43.6313 31.1531 43.5188 33.675C43.4156 36.0188 43.0219 37.2844 42.6938 38.1281C42.2625 39.2438 41.7375 40.05 40.9031 40.8844C40.0594 41.7281 39.2625 42.2438 38.1469 42.675C37.3031 43.0031 36.0281 43.3969 33.6938 43.5C31.1625 43.6125 30.4031 43.6406 24 43.6406C17.5875 43.6406 16.8281 43.6125 14.3063 43.5C11.9625 43.3969 10.6969 43.0031 9.85313 42.675C8.7375 42.2438 7.93125 41.7188 7.09688 40.8844C6.25313 40.0406 5.7375 39.2438 5.30625 38.1281C4.97813 37.2844 4.58438 36.0094 4.48125 33.675C4.36875 31.1438 4.34063 30.3844 4.34063 23.9813C4.34063 17.5688 4.36875 16.8094 4.48125 14.2875C4.58438 11.9437 4.97813 10.6781 5.30625 9.83438C5.7375 8.71875 6.2625 7.9125 7.09688 7.07812C7.94063 6.23438 8.7375 5.71875 9.85313 5.2875C10.6969 4.95938 11.9719 4.56562 14.3063 4.4625C16.8281 4.35 17.5875 4.32187 24 4.32187ZM24 0C17.4844 0 16.6688 0.028125 14.1094 0.140625C11.5594 0.253125 9.80625 0.665625 8.2875 1.25625C6.70312 1.875 5.3625 2.69062 4.03125 4.03125C2.69063 5.3625 1.875 6.70313 1.25625 8.27813C0.665625 9.80625 0.253125 11.55 0.140625 14.1C0.028125 16.6687 0 17.4844 0 24C0 30.5156 0.028125 31.3312 0.140625 33.8906C0.253125 36.4406 0.665625 38.1938 1.25625 39.7125C1.875 41.2969 2.69063 42.6375 4.03125 43.9688C5.3625 45.3 6.70313 46.125 8.27813 46.7344C9.80625 47.325 11.55 47.7375 14.1 47.85C16.6594 47.9625 17.475 47.9906 23.9906 47.9906C30.5063 47.9906 31.3219 47.9625 33.8813 47.85C36.4313 47.7375 38.1844 47.325 39.7031 46.7344C41.2781 46.125 42.6188 45.3 43.95 43.9688C45.2812 42.6375 46.1063 41.2969 46.7156 39.7219C47.3063 38.1938 47.7188 36.45 47.8313 33.9C47.9438 31.3406 47.9719 30.525 47.9719 24.0094C47.9719 17.4938 47.9438 16.6781 47.8313 14.1188C47.7188 11.5688 47.3063 9.81563 46.7156 8.29688C46.125 6.70312 45.3094 5.3625 43.9688 4.03125C42.6375 2.7 41.2969 1.875 39.7219 1.26562C38.1938 0.675 36.45 0.2625 33.9 0.15C31.3313 0.028125 30.5156 0 24 0Z" fill="#000100"/>
                                        <path d="M24 11.6719C17.1938 11.6719 11.6719 17.1938 11.6719 24C11.6719 30.8062 17.1938 36.3281 24 36.3281C30.8062 36.3281 36.3281 30.8062 36.3281 24C36.3281 17.1938 30.8062 11.6719 24 11.6719ZM24 31.9969C19.5844 31.9969 16.0031 28.4156 16.0031 24C16.0031 19.5844 19.5844 16.0031 24 16.0031C28.4156 16.0031 31.9969 19.5844 31.9969 24C31.9969 28.4156 28.4156 31.9969 24 31.9969Z" fill="#000100"/>
                                        <path d="M39.6937 11.1844C39.6937 12.7782 38.4 14.0625 36.8156 14.0625C35.2219 14.0625 33.9375 12.7688 33.9375 11.1844C33.9375 9.59065 35.2313 8.30627 36.8156 8.30627C38.4 8.30627 39.6937 9.60003 39.6937 11.1844Z" fill="#000100"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_17_27">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                        
                                </div>
                                <div>{{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                </div>
                            </a>
                            @endif

                            @if($user->profile->linkedin_account)
                            <a
                                href="{{ $user->profile->linkedin_account }}"
                                class="font-semibold flex gap-2 items-center"
                            >
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_17_32)">
                                        <path d="M44.4567 0H3.54333C2.60358 0 1.70232 0.373315 1.03782 1.03782C0.373315 1.70232 0 2.60358 0 3.54333V44.4567C0 45.3964 0.373315 46.2977 1.03782 46.9622C1.70232 47.6267 2.60358 48 3.54333 48H44.4567C45.3964 48 46.2977 47.6267 46.9622 46.9622C47.6267 46.2977 48 45.3964 48 44.4567V3.54333C48 2.60358 47.6267 1.70232 46.9622 1.03782C46.2977 0.373315 45.3964 0 44.4567 0ZM14.3067 40.89H7.09V17.9667H14.3067V40.89ZM10.6933 14.79C9.87473 14.7854 9.07583 14.5384 8.39747 14.0802C7.71911 13.622 7.19168 12.9731 6.88175 12.2154C6.57183 11.4577 6.4933 10.6252 6.65606 9.82291C6.81883 9.02063 7.2156 8.28455 7.79631 7.70756C8.37702 7.13057 9.11563 6.73853 9.91893 6.58092C10.7222 6.42331 11.5542 6.50719 12.3099 6.82197C13.0656 7.13675 13.7111 7.66833 14.1649 8.34962C14.6188 9.03092 14.8606 9.83138 14.86 10.65C14.8677 11.1981 14.765 11.7421 14.558 12.2496C14.351 12.7571 14.044 13.2178 13.6551 13.6041C13.2663 13.9905 12.8037 14.2946 12.2948 14.4983C11.786 14.702 11.2413 14.8012 10.6933 14.79ZM40.9067 40.91H33.6933V28.3867C33.6933 24.6933 32.1233 23.5533 30.0967 23.5533C27.9567 23.5533 25.8567 25.1667 25.8567 28.48V40.91H18.64V17.9833H25.58V21.16H25.6733C26.37 19.75 28.81 17.34 32.5333 17.34C36.56 17.34 40.91 19.73 40.91 26.73L40.9067 40.91Z" fill="#0A66C2"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_17_32">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                </div>
                                <div>{{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 mt-10">
                <div class="flex flex-col gap-3">
                    <div class="text-3xl font-semibold col-span-1">Blogs</div>
                </div>
                <div class="grid grid-cols-2 gap-8 col-span-3">
                    @unless (count($blogs) == 0)
                        @foreach ($blogs as $blog)
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
