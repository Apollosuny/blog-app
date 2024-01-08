<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse duration-100 hover:scale-105">
            <div>
                <svg id="logo-34" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 20C0 10.5719 0 5.85786 2.92893 2.92893C5.85786 0 10.5719 0 20 0C29.4281 0 34.1421 0 37.0711 2.92893C40 5.85786 40 10.5719 40 20C40 29.4281 40 34.1421 37.0711 37.0711C34.1421 40 29.4281 40 20 40C10.5719 40 5.85786 40 2.92893 37.0711C0 34.1421 0 29.4281 0 20Z"
                        class="ccustom" fill="#243A5A"></path>
                    <path
                        d="M24 26C24.5523 26 25.0101 26.4521 24.9004 26.9934C24.7065 27.9494 24.2355 28.8355 23.5355 29.5355C22.5979 30.4732 21.3261 31 20 31C18.6739 31 17.4022 30.4732 16.4645 29.5355C15.7645 28.8355 15.2935 27.9494 15.0997 26.9934C14.9899 26.4521 15.4477 26 16 26L24 26Z"
                        class="ccompli2" fill="#FFFFFF"></path>
                    <path
                        d="M26.1023 17.7765C25.5688 17.9194 25.2421 18.4775 25.5126 18.959C25.7973 19.4658 26.1911 19.9081 26.6702 20.2514C27.4224 20.7904 28.3382 21.052 29.2617 20.9914C30.1851 20.9309 31.059 20.5521 31.7344 19.9195C32.4099 19.2869 32.845 18.4396 32.9658 17.5221C33.0866 16.6046 32.8856 15.6736 32.3969 14.8877C31.9082 14.1019 31.1621 13.5098 30.2858 13.2123C29.4095 12.9148 28.4572 12.9304 27.5911 13.2564C27.0395 13.464 26.5447 13.7893 26.1385 14.2051C25.7526 14.6002 25.9237 15.2239 26.402 15.5L26.9093 15.7929C27.6808 16.2384 27.5287 17.3943 26.6681 17.6249L26.1023 17.7765Z"
                        class="ccompli2" fill="#FFFFFF"></path>
                    <path
                        d="M13.8978 17.7765C14.4313 17.9194 14.758 18.4775 14.4875 18.959C14.2028 19.4658 13.809 19.9081 13.33 20.2514C12.5778 20.7904 11.6619 21.052 10.7385 20.9914C9.81502 20.9309 8.94113 20.5521 8.2657 19.9195C7.59027 19.2869 7.15508 18.4396 7.03429 17.5221C6.9135 16.6046 7.11457 15.6736 7.60326 14.8877C8.09194 14.1019 8.838 13.5098 9.71431 13.2123C10.5906 12.9148 11.543 12.9304 12.4091 13.2564C12.9606 13.464 13.4555 13.7893 13.8617 14.2051C14.2476 14.6002 14.0764 15.2239 13.5981 15.5L13.0908 15.7929C12.3193 16.2384 12.4715 17.3943 13.332 17.6249L13.8978 17.7765Z"
                        class="ccompli2" fill="#FFFFFF"></path>
                </svg>
            </div>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">VNUIS Blog</span>
        </a>
        <div class="flex">
            <div class="flex gap-4 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @auth
                    <div x-data="{ open: false }" class="dark:bg-gray-800 w-64 flex justify-center items-center">
                        <div @click="open = !open" class="relative border-b-4 border-transparent" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                            <div class="flex justify-center items-center space-x-3 cursor-pointer">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                    <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                                </div>
                                <div class="font-semibold dark:text-white text-gray-900 text-lg">
                                    <div class="cursor-pointer">{{auth()->user()->username}}</div>
                                </div>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                                <ul class="space-y-3 dark:text-white">
                                    <li class="font-medium">
                                        <a href="{{ route('profile') }}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                            </div>
                                            Account
                                        </a>
                                    </li>
                                    <li class="font-medium">
                                        <a href="{{ route('achieve') }}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                            <div class="mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                </svg>
                                            </div>
                                            Achieve blogs
                                        </a>
                                    </li>
                                    <hr class="dark:border-gray-700">
                                    <li class="font-medium">
                                        <form method="POST" action="/logout" >
                                            @csrf
                                            <button type="submit" class="w-full flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                                <div class="mr-3 text-red-600">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                                </div>
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="ml-14 flex gap-5">
                        <a href="/login" type="button"
                            class="
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
                            Login
                        </a>
                        <a href="/register" type="button"
                            class="
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
                            Register
                        </a>
                    </div>
                @endauth
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 {{ request()->routeIs('home') ? 'bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : '' }} text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            >Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 {{ request()->routeIs('about') ? 'bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : '' }} text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories') }}"
                            class="block py-2 px-3 {{ request()->routeIs('categories') ? 'bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : '' }} text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            Categories
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 {{ request()->routeIs('contact') ? 'bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : '' }} text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        >
                            Contact
                        </a>
                    </li>
                    @auth
                    <li>
                        <a href="{{ route('blog_create') }}"
                            class="block py-2 px-3 {{ request()->routeIs('blog_create') ? 'bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : '' }} text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Create</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
