       <!-- Name -->
       <div>
        <x-label for="option_title" :value="__('Title')" />
        {{ Form::text('option_title', Request::old('option_title'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="option_title" class="block mt-1 w-full" type="text" name="option_title"
            :value="{{$option->option_title}}" required autofocus /> --}}
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="option_content" :value="__('Body')" />
        {{ Form::text('option_content', Request::old('option_content'), array('class' => 'block mt-1 w-full')) }}
        {{-- <x-input id="option_content" class="block mt-1 w-full" type="text" name="option_content"
            :value="{{$option->option_content}}" required /> --}}
    </div>

