<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @forelse($posts as $post)


                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{$post->post_title}}

                    <a href="{{route('posts.show',$post->id)}}">Details</a>
                    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                 </div>

                 @empty
                 <p>No Posts</p>
             @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
