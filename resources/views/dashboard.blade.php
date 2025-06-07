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
                    <x-category-tabs>
                        No category found
                    </x-category-tabs>
                </div>
            </div>
            <div class="mt-8 p-6 text-gray-900">
                @forelse ($posts as $post)
                    <x-post-item :post="$post" ></x-post-item>
                @empty
                    <div class="text-center text-gray-400 py-12">
                        No post found
                    </div>
                @endforelse
            </div>
            <div class="text-center">
                {{ $posts->onEachSide(1)->links() }}
            </div>
        </div>

    </div>
    </div>
</x-app-layout>