<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @permission('comment_edit')
                <a href="{{ route('comments.edit', $comment->id) }}"
                    class="bg-blue-500 text-white font-bold py-2 px-4 mx-4 my-4 rounded-full">Edit</a>
            @endpermission
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $comment->comment_title }}
                    <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                </div>

                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $comment->comment_content }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>