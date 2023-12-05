@extends('layouts.app')

@section('Mid')
{{-- @foreach ($notificationsA as $not)

{{$not->id}}
{{$not->id_user}}
{{$not->id_formulaire_soumis}}
{{$not->nom}}
{{$not->data}} --}}

<section>
    <div class="contain">
        <h1> Formulaire soumis:</h1>

<div class="formulaire readonly">
@foreach ($notificationsA as $not)
        <h3>{{ $not->type_forms }}</h3>
        @foreach (json_decode($not->data, true)['fields'] as $field)
            @if ($field['type'] === 'h3')
                <div class="form-group">
                    <h3 class="h3">{{ $field['value'] }}</h3>
                </div>
            @elseif ($field['label'] === 'Gauche' || $field['label'] === 'Droite')
                <div class="form-group {{ $field['class'] ?? '' }} dg-class">
                    <div class="dg-container" style="display: none;">
                        <input  onclick="return false;" type="checkbox" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                            value="{{ $field['value'] }}" class="form-control dg-option"
                            data-group="{{ $field['group'] }}" {{ $field['value'] ? 'checked' : '' }} readonly>
                        <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                    </div>
                </div>
            @elseif ($field['type'] === 'checkbox')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <input  onclick="return false;"1 2 onclick="return false;" type="checkbox" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                        value="{{ $field['value'] }}" class="form-control" readonly
                        {{ $field['dg'] ? 'data-dg=true' : '' }} data-group="{{ $field['group'] ?? '' }}" {{ $field['value'] ? 'checked' : '' }}>
                    <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                </div>
            @endif

            @if ($field['type'] === 'h1')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <h1>{{ $field['value'] }}</h1>
                </div>
            @elseif ($field['type'] === 'h2')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <h2>{{ $field['value'] }}</h2>
                </div>
            @elseif ($field['type'] === 'h3')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <h3 class="h3">{{ $field['value'] }}</h3>
                </div>
            @elseif ($field['type'] === 'p')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <span>{{ $field['value'] }}</span>
                </div>
            @elseif ($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                <div class="form-group {{ $field['class'] ?? '' }}">
                    <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                    <input readonly type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                        value="{{ $field['value'] }}" class="form-control">
                </div>
            @endif
    @endforeach

  {{--   @if($not->vu == 0)
        <form action="{{ route('notification.updateNot', ['not' => $not->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <button type="submit" class="btn-base">J'ai pris connaissance</button>
        </form>
    @else
    <div class="valide">
        <h4>Ce formulaire à été validé </h4>
        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.39995 13.0125L0.699951 7.31255L2.12495 5.88755L6.39995 10.1625L15.575 0.987549L17 2.41255L6.39995 13.0125Z" fill="#1BBF00"></path>
         </svg>
    </div>
    @endif--}}


    @if($not->confirmation == 0)    
    <form action="{{ route('notification.updateNot', ['not' => $not->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <button type="submit" class="btn-base">J'ai pris connaissance</button>
    </form>
@else
    <div class="valide">
        <h4>Ce formulaire a été validé </h4>
        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.39995 13.0125L0.699951 7.31255L2.12495 5.88755L6.39995 10.1625L15.575 0.987549L17 2.41255L6.39995 13.0125Z" fill="#1BBF00"></path>
        </svg>
    </div>
@endif


@endforeach

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxesWithDg = document.querySelectorAll('input[type="checkbox"][data-dg="true"]');
        const checkboxTemoins = document.querySelector(
        'input[type="checkbox"][name="Témoins?"]'); // Sélectionnez la case Témoins?

        checkboxesWithDg.forEach(checkbox => {
            // Find the related radio button containers based on the checkbox's group
            const radioButtons = document.querySelectorAll(
                `.dg-container [data-group="${checkbox.getAttribute('data-group')}"]`
            );
            const relatedRadioContainers = Array.from(radioButtons).map(radio => radio.parentNode);

            // Hide the radio button containers initially if the checkbox is not checked
            relatedRadioContainers.forEach(container => {
                container.style.display = checkbox.checked ? 'flex' : 'none';
            });

            checkbox.addEventListener('change', function() {
                relatedRadioContainers.forEach(container => {
                    container.style.display = checkbox.checked ? 'flex' : 'none';
                });
            });
        });

        checkboxTemoins.addEventListener('change', function() {
                if (checkboxTemoins.checked) {
                    // Si la case est cochée, affichez les champs conditionnels en utilisant 'flex'
                    conditionalFields.forEach(field => field.style.display = 'flex');
                } else {
                    // Si la case n'est pas cochée, masquez les champs conditionnels en utilisant 'none'
                    conditionalFields.forEach(field => field.style.display = 'none');
                }
            });

        const ouvrirCheckbox = document.getElementById('ouvrir');
        const conditionalFields = document.querySelectorAll('.conditional');
        conditionalFields.forEach(field => field.style.display = 'none');
    });

</script>

@endsection



