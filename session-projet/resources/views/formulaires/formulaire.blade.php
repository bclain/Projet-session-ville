<!-- resources/views/formulaires/formulaire.blade.php -->

@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>{{ $formulaire->type_forms }}</h1>

        <form action="#" method="post">
            @csrf
            @php
                $fields = $formulaire->data['fields'] ?? [];
            @endphp

            @foreach($fields as $field)
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <label for="{{ $field['label'] }}">{{ $field['label'] }}</label>

                    @if($field['type'] === 'checkbox')
                        <input type="checkbox" id="{{ $field['id'] ?? '' }}" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'radio')
                        <input type="radio" name="{{ $field['name'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'time')
                        <input type="time" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @else
                        <input type="{{ $field['type'] }}" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @endif
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ouvrirCheckbox = document.getElementById('ouvrir');
        const conditionalFields = document.querySelectorAll('.conditional');

        console.log('Ouvrir Checkbox:', ouvrirCheckbox);
        console.log('Conditional Fields:', conditionalFields);

        conditionalFields.forEach(field => field.style.display = 'none');

        ouvrirCheckbox.addEventListener('change', function() {
            console.log('Checkbox changed:', this.checked);
            conditionalFields.forEach(field => field.style.display = this.checked ? 'block' : 'none');
        });
    });
</script>
@endsection
