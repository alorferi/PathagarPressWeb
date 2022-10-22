<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $post->post_title }}
                </div>

                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $post->post_content }}
                </div>

            </div>

</x-guest-layout>
