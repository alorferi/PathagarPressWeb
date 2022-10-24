<div class="max-w-sm w-full lg:max-w-full lg:flex py-2 px-4">
    @if ($post->image != null)
        <img class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            src="{{ asset($post->image->url) }}" width="256" />
    @endif

    <div
        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">



            <div class="text-gray-900 font-bold text-xl mb-2"> {{ $post->post_title }}</div>
            <p class="text-gray-700 text-base"> {{ $post->post_content }}</p>
        </div>
        @if ($post->author != null)
            <div class="flex items-center">
                @if ($post->author->image)
                    <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->image->url }}"
                        alt="Avatar of Jonathan Reinink">
                @endif
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ $post->author->name }}</p>
                    <p class="text-gray-600">{{ $post->post_date->diffForhumans() }}</p>
                </div>
            </div>
        @endif

        <a class="bg-blue-500 text-white font-bold py-2 px-4"
            href="{{ route('posts.show', $post->id) }}" target="_blank">Details</a>
        &nbsp;
        @permission('post_edit')
            <a class="bg-blue-500 text-white font-bold py-2 px-4" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
        @endpermission

    </div>
</div>


  {{-- <div class="p-6 m-6 bg-white border-b border-gray-200">

        @if ($post->image != null)
            <img src="{{ asset($post->image->url) }}" width="258" height="100" />
        @endif

        {{ $post->post_title }}


        @if ($post->author != null)
            <div class="px-6 pt-4 pb-2 flex items-center">

                @if ($post->author->image)
                    <img class="w-10 h-10 rounded-full mr-6" src="{{ $post->author->image->url }}"
                        alt="Avatar of Jonathan Reinink" />
                @endif
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ $post->author->name }}</p>
                    <p class="text-gray-600">{{ $post->post_date->diffForhumans() }}</p>
                </div>
            </div>
        @endif


        <a class="bg-blue-500 text-white font-bold py-2 px-4"class="bg-blue-500 text-white font-bold py-2 px-4"
            href="{{ route('posts.show', $post->id) }}" target="_blank">Details</a>

        &nbsp;
        @permission('post_edit')
            <a class="bg-blue-500 text-white font-bold py-2 px-4" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
        @endpermission


    </div> --}}
