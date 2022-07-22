<div class="p-2">
    {!! $posts->links() !!}
</div>

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



    @forelse($posts as $post)
        <div class="p-6 m-6 bg-white border-b border-gray-200">
            {{ $post->post_title }}

            <a href="{{ route('posts.show', $post->id) }}">Details</a>

            @permission('post_edit')
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            @endpermission


        </div>

    @empty
        <p>No Posts</p>
    @endforelse
</div>

<div class="p-2">
    {!! $posts->links() !!}
</div>
