{{-- <div class="d-flex justify-content-between mt-2"> --}}

    @if (!is_array($paginator))
        <div class="p-2">
            {!! $paginator->links() !!}
        </div>
    @endif
{{-- </div> --}}
