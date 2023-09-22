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
                        @if(is_array($field['value']))
                            @foreach($field['value'] as $option)
                                <input type="radio"value="{{ $option }}" class="form-control"> {{ $option }}
                            @endforeach
                        @else
                            <input type="radio" value="{{ $field['value'] }}" class="form-control">
                        @endif
                    @elseif($field['type'] === 'time')
                        <input type="time" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'h1')
                        <h1>{{ $field['value'] }}</h1>
                    @elseif($field['type'] === 'h2')
                        <h2>{{ $field['value'] }}</h2>
                    @elseif($field['type'] === 'h3')
                        <h3>{{ $field['value'] }}</h3>
                    @elseif($field['type'] === 'p')
                        <span>{{ $field['value'] }}</span>
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
        conditionalFields.forEach(field => field.style.display = 'none');

        ouvrirCheckbox.addEventListener('change', function() {
            console.log('Checkbox changed:', this.checked);
            conditionalFields.forEach(field => field.style.display = this.checked ? 'block' : 'none');
        });
    });
</script>
@endsection
