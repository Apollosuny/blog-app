@extends('admin.index')

@section('dashboard-section')
    <div class="p-4">
        <div>
            <div class="flex items-center mb-3">
                <ol class="list-none p-0 inline-flex space-x-2">
                    <li class="flex items-center">
                        <svg onclick="window.location.href='/dashboard';" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 576 512" class="cursor-pointer hover:fill-blue-500 transition-colors duration-300"
                            fill="#4b5563">
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg> <span class="mx-2">/</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-800">Dashboard</span>
                    </li>
                </ol>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5">
            <div class="flex justify-between border p-5 rounded-lg">
                <div>
                    <div class="text-xl font-normal">All Blogs</div>
                    <div class="text-2xl font-medium my-4">1500</div>
                    <div class="text-sm font-light">Increased by 60%</div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-between border p-5 rounded-lg">
                <div>
                    <div class="text-xl font-normal">Authors</div>
                    <div class="text-2xl font-medium my-4">150</div>
                    <div class="text-sm font-light">Increased by 35%</div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-between border p-5 rounded-lg">
                <div>
                    <div class="text-xl font-normal">Statistic</div>
                    <div class="text-2xl font-medium my-4">1200</div>
                    <div class="text-sm font-light">Decreased by 10%</div>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
