<!-- resources/views/formulaires/formulaire.blade.php -->

@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>{{ $formulaire->type_forms }}</h1>

        <form action="#" method="post">
            @csrf
            @php
                // Pas besoin de json_decode ici car Laravel fait déjà le cast en tableau
                $fields = $formulaire->data['fields'] ?? [];
            @endphp

            @foreach($fields as $field)
                <div class="form-group">
                    <label for="{{ $field['label'] }}">{{ $field['label'] }}</label>

                    @if($field['type'] === 'text')
                        <input type="text" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'email')
                        <input type="email" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'date')
                        <input type="date" name="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                    @elseif($field['type'] === 'textarea')
                        <textarea name="{{ $field['label'] }}" class="form-control">{{ $field['value'] }}</textarea>
                    @endif
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
