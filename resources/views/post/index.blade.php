<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="p-2">
        {!! $posts->links() !!}
    </div>

    @php
        $i = 0;
    @endphp

    {{-- <div class="grid grid-cols-3 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-8" > --}}

    @forelse($posts as $post)
        @if ($i == 0)
            <div class="flex flex-column flex-wrap">
        @endif

        @include('post.post_v_card_item')

        @if ($i == 2)
            </div>
        @endif

        @php
            $i++;

            if ($i == 3) {
                $i = 0;
            }

        @endphp


    @empty
        <p>No Posts</p>
    @endforelse

    {{-- </div> --}}


    <div class="p-2">
        {!! $posts->links() !!}
    </div>


</x-guest-layout>
