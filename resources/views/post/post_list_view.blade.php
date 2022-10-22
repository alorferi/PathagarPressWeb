<div class="p-2">
    {!! $posts->links() !!}
</div>




@php
    $i = 0;
@endphp

@forelse($posts as $post)
    @if ($i == 0)
        <div class="flex flex-wrap">
    @endif

    <div class="m-6 max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://backoffice.alorferi.com/images/slider_imgs/img_khude_pathok.png"
            alt="Sunset in the mountains" width="300">
        <div class="px-6 py-6">
            <div class="font-bold text-xl mb-2"> {{ $post->post_title }}</div>
            <p class="text-gray-700 text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>

        <div class="px-6 pt-4 pb-2 flex items-center">
            <img class="w-10 h-10 rounded-full mr-6"
                src="https://backoffice.alorferi.com/images/usr_photo_233d7c94-fb94-4819-a5c1-13ad73a49488.jpg/user_photo"
                alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
                <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                <p class="text-gray-600">Aug 18</p>
            </div>
        </div>

        <div class="px-6 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>


    </div>


    @if ($i == 2)
        </div>
    @endif

    @php
        $i++;

        if ($i == 3) {
            $i = 0;
        }

    @endphp


    {{-- <div class="p-6  mt-3 mb-3 bg-white border-b border-gray-200">
            {{ $post->post_title }}
            <a href="{{ route('posts.show', $post->id) }}">Details</a>
        </div> --}}

@empty
    <p>No Posts</p>
@endforelse



<div class="p-2">
    {!! $posts->links() !!}
</div>
