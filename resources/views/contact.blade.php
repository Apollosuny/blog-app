<x-layout>
    <div class="container mx-auto px-4 mt-28">
        <div class="grid grid-cols-2 gap-4">
            <div style="height: 600px; width: 100%">
                <img class="w-full h-full" src="{{ asset('images/contact.jpg') }}" alt="Contact">
            </div>
            <div>
                <h3 class="text-5xl font-bold">Contact Us</h3>
                <p class="mt-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam possimus quas accusantium dolorem quo enim impedit soluta. Laudantium et delectus tempora recusandae! Saepe placeat fuga accusantium quisquam impedit. Dicta, aliquid.</p>
                <div class="mt-8">
                    <form class="flex flex-col gap-6" action="">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                        </div>
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John@gmail.com" required>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 bg-black duration-150 hover:scale-105">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>