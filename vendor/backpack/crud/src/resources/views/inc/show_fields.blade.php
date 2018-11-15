{{-- Show the inputs --}}
@foreach ($fields as $field)
    <div class="col-md-6">
        <div class="form-group">
    <!-- load the view from type and view_namespace attribute if set -->
    @php
        $fieldsViewNamespace = $field['view_namespace'] ?? 'crud::fields';
    @endphp

    @include($fieldsViewNamespace.'.'.$field['type'], ['field' => $field])
        </div>
    </div>
@endforeach
