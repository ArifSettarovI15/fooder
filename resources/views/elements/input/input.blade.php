<div class="field field-input @if($icon_left)field-icon-left @endif">
    <label>
        @if($icon_left)
            <x-svg :name="$icon_left" class="input-icon" width="20" height="20"/>
        @endif
        <input type="@if(isset($options['type'])) {{$options['type']}} @else text @endif"
               name="{{$name}}"
               class="input input_{{$mod}} input_{{$size}} "
               placeholder="{{$placeholder}}">
    </label>
</div>
