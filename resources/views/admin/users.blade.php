@extends('admin.index')

@section('dashboard-section')
    <div class="p-4">
        <div>
            <div class="flex items-center mb-3">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <svg onclick="window.location.href='/';" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 576 512" class="cursor-pointer hover:fill-blue-500 transition-colors duration-300"
                            fill="#4b5563">
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg> <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-800">Users</span>
                    </li>
                </ol>
            </div>
        </div>
        <div class="bg-white shadow-lg p-5 rounded-lg">
            <div class="flex justify-between">
                <div class="text-3xl font-semibold">All Users</div>
            </div>
            <hr
                class="h-px mt-2 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="mt-6">
                

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Date of birth
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Social account
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 overflow-hidden">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->id }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->username }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->profile->dob }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->profile->address }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->profile->phone }}
                </th>
                <td class="px-6 py-4 flex flex-col items-center gap-2">
                    <a href="{{ $user->profile->facebook_account }}" class="inline-flex w-fit items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        Facebook
                    </a>
                    <a href="{{ $user->profile->instagram_account }}" class="inline-flex w-fit items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        Instagram
                    </a>
                    <a href="{{ $user->profile->linkedin_account }}" class="inline-flex w-fit items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                        Linkedin
                    </a>
                </td>
                <td class="px-6 py-4">
                    <div class="h-full flex gap-2 justify-center items-center">
                        <a href="#" class="
                        text-white 
                        bg-sky-400
                        hover:bg-sky-800 
                        focus:ring-4 
                        focus:outline-none 
                        focus:ring-sky-300 
                        font-medium 
                        rounded-lg 
                        text-sm 
                        px-4 
                        py-2 
                        text-center 
                        dark:bg-sky-600 
                        dark:hover:bg-sky-700 
                        dark:focus:ring-sky-800">
                        Edit
                    </a>
                        <form method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="
                                    text-white 
                                    bg-red-700
                                    hover:bg-red-800 
                                    focus:ring-4 
                                    focus:outline-none 
                                    focus:ring-red-300 
                                    font-medium 
                                    rounded-lg 
                                    text-sm 
                                    px-4 
                                    py-2 
                                    text-center 
                                    dark:bg-red-600 
                                    dark:hover:bg-red-700 
                                    dark:focus:ring-red-800">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
        </div>
    </div>
@endsection
