<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @permission('user_create')
                <a href="{{ route('users.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Create</a>
            @endpermission

            <div class="p-2">
                {!! $users->links() !!}
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                @forelse($users as $user)
                    <div class="p-6 m-6 bg-white border-b border-gray-200">
                        {{ $user->name }} |  {{ $user->email }}


                        @permission('user_edit')
                            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                        @endpermission


                    </div>

                @empty
                    <p>No Users</p>
                @endforelse
            </div>

            <div class="p-2">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
