<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Tab --}}
                    <div
                        class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px">
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active text-lg dark:text-blue-500 dark:border-blue-500"
                                    aria-current="page">All</a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="me-2">
                                    <a href="#"
                                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg text-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="mt-8 p-6 text-gray-900">
                @foreach ($posts as $post)
                    <div
                        class="flex bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex-1 p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{$post->title}}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{Str::words($post->content, 20)}}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <a href="#">
                            <img class="w-48 h-full object-cover rounded-r-lg"
                                src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>

                @endforeach
            </div>
        </div>

    </div>
    </div>
</x-app-layout>