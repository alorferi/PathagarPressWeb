       <!-- Name -->
       <div>
        <x-label for="post_title" :value="__('Title')" />
        {{ Form::text('post_title', Request::old('post_title'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="post_title" class="block mt-1 w-full" type="text" name="post_title"
            :value="{{$post->post_title}}" required autofocus /> --}}
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="post_content" :value="__('Body')" />
        {{ Form::text('post_content', Request::old('post_content'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="post_content" class="block mt-1 w-full" type="text" name="post_content"
            :value="{{$post->post_content}}" required /> --}}
    </div>

