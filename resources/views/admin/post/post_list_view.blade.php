<div class="p-2">
    {!! $posts->links() !!}
</div>

{{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}

@forelse($posts as $post)

@include("admin.post.post_horizontal_card_item")


@empty
    <p>No Posts</p>
@endforelse
{{-- </div> --}}

<div class="p-2">
    {!! $posts->links() !!}
</div>
