<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Options') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @permission('option_create')
                <a href="{{ route('options.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Create</a>
            @endpermission

            <div class="p-2">
                {!! $options->links() !!}
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                @forelse($options as $option)
                    <div class="p-6 m-6 bg-white border-b border-gray-200">
                        {{ $option->option_title }}

                        <a href="{{ route('options.show', $option->id) }}">Details</a>

                        @permission('option_edit')
                            <a href="{{ route('options.edit', $option->id) }}">Edit</a>
                        @endpermission


                    </div>

                @empty
                    <p>No Options</p>
                @endforelse
            </div>

            <div class="p-2">
                {!! $options->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
