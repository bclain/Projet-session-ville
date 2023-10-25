@extends('layouts.app')

@section('Mid')
<section>
    <div class="contain">
        <h1>{{ $formulaire->type_forms }}</h1>

        <form action="#" method="post">
            @csrf
            @php
                $fields = $formulaire->data['fields'] ?? [];
            @endphp

            @foreach($fields as $field)
                <div class="form-group {{ $field['class'] ?? '' }}">
                    @if($field['type'] === 'checkbox')
                        <input type="checkbox" id="{{ $field['id'] }}" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control" {{ $field['dg'] ? 'data-dg=true' : '' }} data-group="{{ $field['group'] ?? '' }}">
                        <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                    @elseif($field['type'] === 'radio')
                        <div class="dg-container" style="display: none;">
                            <input type="radio" id="{{ $field['id'] }}" name="{{ $field['group'] }}" value="{{ $field['value'] }}" class="form-control dg-option" data-group="{{ $field['group'] }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                        </div>
                    @elseif($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                        <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                    @endif

                    @if($field['type'] === 'time')
                        <input type="time" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'h1')
                        <h1>{{ $field['value'] }}</h1>
                    @elseif($field['type'] === 'h2')
                        <h2>{{ $field['value'] }}</h2>
                    @elseif($field['type'] === 'h3')
                        <h3>{{ $field['value'] }}</h3>
                    @elseif($field['type'] === 'p')
                        <span>{{ $field['value'] }}</span>
                    @elseif($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                        <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @endif
                </div>
            @endforeach


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
@endsection


@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxesWithDg = document.querySelectorAll('input[type="checkbox"][data-dg="true"]');

    checkboxesWithDg.forEach(checkbox => {
        // Find the related radio button containers based on the checkbox's group
        const radioButtons = document.querySelectorAll(`.dg-container input[type="radio"][data-group="${checkbox.getAttribute('data-group')}"]`);
        const relatedRadioContainers = Array.from(radioButtons).map(radio => radio.parentNode);

        // Hide the radio button containers initially if the checkbox is not checked
        relatedRadioContainers.forEach(container => {
            container.style.display = checkbox.checked ? 'block' : 'none';
        });

        checkbox.addEventListener('change', function() {
            relatedRadioContainers.forEach(container => {
                container.style.display = checkbox.checked ? 'block' : 'none';
            });
        });
    });

    const ouvrirCheckbox = document.getElementById('ouvrir');
    const conditionalFields = document.querySelectorAll('.conditional');
    conditionalFields.forEach(field => field.style.display = 'none');

    ouvrirCheckbox.addEventListener('change', function() {
        conditionalFields.forEach(field => field.style.display = this.checked ? 'block' : 'none');
    });
});

</script>
@endsection
