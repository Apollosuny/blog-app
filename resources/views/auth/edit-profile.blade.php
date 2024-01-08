<x-layout>
        <div class="container mx-auto px-4 mt-24">
            <div class="grid grid-cols-4 gap-10">
                <div class="col-span-1">
                    <h3 class="text-2xl font-medium px-4 py-3">Settings</h3>
                    <hr class="h-px my-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                    <div class="flex flex-col gap-4">
                        <div class="flex gap-2 px-4 py-3 bg-cyan-100 rounded-lg cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            Profile
                        </div>
                        <div class="flex gap-2 px-4 py-3 duration-150 rounded-lg cursor-pointer hover:bg-cyan-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            Security
                        </div>
                        <div class="flex gap-2 px-4 py-3 duration-150 rounded-lg cursor-pointer hover:bg-cyan-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg>
                            Others
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Edit Profile
                        </h2>
                        <p class="mb-4">Edit your profile</p>
                    </header>
            
                    <form method="POST" action="/profile/edit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex gap-5">
                            <div class="mb-6 w-full">
                                <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name" value="{{ $user->profile->first_name }}" />
                                @error('first_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-6 w-full">
                                <label for="last_name" class="inline-block text-lg mb-2">Last Name</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name" value="{{ $user->profile->last_name }}" />
                                @error('last_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
            
                        <div class="flex gap-5">
                            <div class="mb-6 w-full">
                                <label for="dob" class="inline-block text-lg mb-2">Date of birth</label>
                                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="dob" value="{{ $user->profile->dob }}" />
                                @error('dob')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-6 w-full">
                                <label for="address" class="inline-block text-lg mb-2">Address</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{ $user->profile->address }}" />
                                @error('addres')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-6 w-full">
                                <label for="phone" class="inline-block text-lg mb-2">Phone</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone" value="{{ $user->profile->phone }}" />
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
            
                        <div class="mb-6">
                            <label for="avatar" class="inline-block text-lg mb-2">Avatar</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="avatar" value="{{ $user->profile->avatar }}" />
                            @error('avatar')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
            
                        <div class="flex gap-5">
                            <div class="mb-6 w-full">
                                <label for="facebook_account" class="inline-block text-lg mb-2">Facebook Account</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="facebook_account" value="{{ $user->profile->facebook_account }}" />
                                @error('facebook_account')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-6 w-full">
                                <label for="instagram_account" class="inline-block text-lg mb-2">Instagram Account</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="instagram_account" value="{{ $user->profile->instagram_account }}" />
                                @error('instagram_account')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                
                            <div class="mb-6 w-full">
                                <label for="linkedin_account" class="inline-block text-lg mb-2">Linkedin Account</label>
                                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="linkedin_account" value="{{ $user->profile->linkedin_account }}" />
                                @error('linkedin_account')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
            
                        <div class="mt-4 mb-6">
                            <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                                Update Profile
                            </button>
            
                            <a href="/profile" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layout>
