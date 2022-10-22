<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


            @permission('user_edit')
                <a href="{{ route('admin.users.edit', $user->id) }}"
                    class="bg-blue-500 text-white font-bold py-2 px-4 mx-4 my-4 rounded-full">Edit</a>
            @endpermission
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $user->user_title }}
                    <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                </div>

                <div class="p-6 m-6 bg-white border-b border-gray-200">
                    {{ $user->user_content }}
                </div>

            </div>

</x-app-layout>
