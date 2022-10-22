       <!-- Name -->
       <div>
        <x-label for="user_title" :value="__('Title')" />
        {{ Form::text('user_title', Request::old('user_title'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="user_title" class="block mt-1 w-full" type="text" name="user_title"
            :value="{{$user->user_title}}" required autofocus /> --}}
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="user_content" :value="__('Body')" />
        {{ Form::text('user_content', Request::old('user_content'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="user_content" class="block mt-1 w-full" type="text" name="user_content"
            :value="{{$user->user_content}}" required /> --}}
    </div>

