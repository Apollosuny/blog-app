<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Profile
            </h2>
            <p class="mb-4">Edit your profile</p>
        </header>

        <form method="POST" action="/profile/edit" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name" value="{{ $user->profile->first_name }}" />
                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="last_name" class="inline-block text-lg mb-2">Last Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name" value="{{ $user->profile->last_name }}" />
                @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="dob" class="inline-block text-lg mb-2">Date of birth</label>
                <input type="date" class="border border-gray-200 rounded p-2 w-full" name="dob" value="{{ $user->profile->dob }}" />
                @error('dob')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="address" class="inline-block text-lg mb-2">Address</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{ $user->profile->address }}" />
                @error('addres')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="phone" class="inline-block text-lg mb-2">Phone</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone" value="{{ $user->profile->phone }}" />
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="avatar" class="inline-block text-lg mb-2">Avatar</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="avatar" value="{{ $user->profile->avatar }}" />
                @error('avatar')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="facebook_account" class="inline-block text-lg mb-2">Facebook Account</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="facebook_account" value="{{ $user->profile->facebook_account }}" />
                @error('facebook_account')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="instagram_account" class="inline-block text-lg mb-2">Instagram Account</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="instagram_account" value="{{ $user->profile->instagram_account }}" />
                @error('instagram_account')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="linkedin_account" class="inline-block text-lg mb-2">Linkedin Account</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="linkedin_account" value="{{ $user->profile->linkedin_account }}" />
                @error('linkedin_account')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                    Update Profile
                </button>

                <a href="/profile" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
