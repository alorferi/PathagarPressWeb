<div class="p-2">
    {!! $posts->links() !!}
</div>

{{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}

@forelse($posts as $post)
    <div class="p-6 m-6 bg-white border-b border-gray-200">

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


    </div>

@empty
    <p>No Posts</p>
@endforelse
{{-- </div> --}}

<div class="p-2">
    {!! $posts->links() !!}
</div>
