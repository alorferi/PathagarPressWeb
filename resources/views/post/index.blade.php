<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @permission('post_create')
                <a href="{{ route('posts.create') }}" class="bg-blue-500 font-bold py-2 px-4 rounded-full">Create</a>
            @endpermission

            <div class="p-2">
                {!! $posts->links() !!}
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                @forelse($posts as $post)
                    <div class="p-6 m-6 bg-white border-b border-gray-200">
                        {{ $post->post_title }}

                        <a href="{{ route('posts.show', $post->id) }}">Details</a>

                        @permission('post_edit')
                            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                        @endpermission


                    </div>

                @empty
                    <p>No Posts</p>
                @endforelse
            </div>

            <div class="p-2">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
