<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ Html::ul($errors->all(), ['class' => 'text-danger']) }}

                    {{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) }}

                    {{-- <form method="POST" action="{{ route('posts.update',$post->id) }}"> --}}
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="post_title" :value="__('Title')" />
                        {{ Form::text('post_title', Request::old('post_title'), array('class' => 'block mt-1 w-full')) }}
                        {{-- <x-input id="post_title" class="block mt-1 w-full" type="text" name="post_title"
                            :value="{{$post->post_title}}" required autofocus /> --}}
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="post_content" :value="__('Body')" />
                        {{ Form::text('post_content', Request::old('post_content'), array('class' => 'block mt-1 w-full')) }}
                        {{-- <x-input id="post_content" class="block mt-1 w-full" type="text" name="post_content"
                            :value="{{$post->post_content}}" required /> --}}
                    </div>




                    <div class="flex items-center justify-end mt-4">

                        {{ Form::submit('Save', ['class' => 'ml-4']) }}

                        {{ Form::close() }}

                        {{-- <x-button class="ml-4">
                                {{ __('Save') }}
                            </x-button> --}}
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
