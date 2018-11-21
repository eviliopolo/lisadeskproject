<!-- checkbox field -->

<div @include('crud::inc.field_wrapper_attributes') >
    @include('crud::inc.field_translatable_icon')
    <div class="checkbox checkbox-success">
    	<label>
            
         

    	  <input type="hidden" name="{{ $field['name'] }}" value="1">
          <input id="{{ $field['name'] }}" type="checkbox">
          <label for="{{ $field['name'] }}"> {!! $field['label'] !!} </label>
          </label>

    	  <!-- <input type="checkbox" value="1"

          name="{{ $field['name'] }}"

          @if (old($field['name']) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          > {!! $field['label'] !!}
    	</label>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif -->
    </div>
</div>
