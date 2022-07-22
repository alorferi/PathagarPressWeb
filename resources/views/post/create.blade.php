<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('posts.index') }}"
                class="bg-blue-500 text-white font-bold py-2 px-4 mx-4 my-4 rounded-full">Back</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ Html::ul($errors->all(), ['class' => 'text-danger']) }}

                    {{ Form::open(['route' => 'posts.store', 'files' => true]) }}

                    {{-- <form method="POST" action="{{ route('posts.update',$post->id) }}"> --}}
                    @csrf


                    @include('post.input_fields')

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