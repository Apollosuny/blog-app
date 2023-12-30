<x-layout>
    <div class='grid grid-cols-2'>
        <div class='container flex justify-center items-center'>
            <div class='max-w-[480px]'>
                <div class='text-center flex flex-col gap-6 mb-8'>
                    <h2 class='text-5xl font-bold'>Sign In</h2>
                    <p>Lorem ipsum dolor sit amet adipiscing elit.</p>
                </div>
                <div>
                    <form method="POST" action="/auth/local">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2">Email</label>
                            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email')}}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
            
                        <div class="mb-6">
                            <label for="password" class="inline-block text-lg mb-2">
                                Password
                            </label>
                            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{ old('password')}}" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
            
                        <div class="mb-6">
                            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
                <div class='mt-6'>
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-laravel">Login</a>
                    </p>
                </div>
            </div>
        </div>
        <div class='max-h-screen'>
            <img class='max-h-full w-full bg-center bg-cover' src='{{ asset('images/login.jpg')}}' alt='Login' />
        </div>
    </div>
</x-layout>
