@extends('layouts.app')

@section('Mid')
    <section style="">
        <div class="contain">
            <h1>{{ $formulaire->type_forms }}</h1>

            <form action="#" method="post">
                @csrf
                @php
                    $fields = $formulaire->data['fields'] ?? [];
                @endphp

                <input type="hidden" name="type_formulaire" value="{{ $formulaire->type_forms }}">

                @foreach ($fields as $field)
                    @if ($field['label'] === 'Gauche' || $field['label'] === 'Droite')
                        <div class="form-group {{ $field['class'] ?? '' }} dg-class">
                            <div class="dg-container" style="display: none;">
                                <input type="checkbox" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                    value="{{ $field['value'] }}" class="form-control dg-option"
                                    data-group="{{ $field['group'] }}" {{ $field['value'] ? 'checked' : '' }}>
                                <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                            </div>
                        </div>
                    @elseif ($field['type'] === 'checkbox')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <input type="checkbox" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control"
                                {{ $field['dg'] ? 'data-dg=true' : '' }} data-group="{{ $field['group'] ?? '' }}" {{ $field['value'] ? 'checked' : '' }}>
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                        </div>
                    @elseif($field['type'] === 'h3')

                    @elseif($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                        </div>
                    @endif

                    @if ($field['type'] === 'time')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <input type="time" name="{{ $field['label'] }}" value="{{ $field['value'] }}"
                                class="form-control">
                        </div>
                    @elseif($field['type'] === 'h1')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h1>{{ $field['value'] }}</h1>
                        </div>
                    @elseif($field['type'] === 'h2')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h2>{{ $field['value'] }}</h2>
                        </div>
                    @elseif($field['type'] === 'h3')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h3 class="h3">{{ $field['value'] }}</h3>
                        </div>
                    @elseif($field['type'] === 'p')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <span>{{ $field['value'] }}</span>
                        </div>
                    @elseif($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control">
                        </div>
                    @endif
                @endforeach
                


                <button type="submit" class="btn-base">Submit</button>
            </form>
        </div>
    </section>
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

     

       document.addEventListener("DOMContentLoaded", function() {
    // Cibler le formulaire par son ID
    const form = document.getElementById("myForm");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        // Initialiser le JSON
        const jsonData = {
            type_formulaire: document.querySelector('input[name="type_formulaire"]').value,
            fields: [],
        };

        // Parcourir les champs du formulaire et mettre à jour le JSON
        const formElements = form.elements;
        for (let i = 0; i < formElements.length; i++) {
            const element = formElements[i];
            const fieldName = element.getAttribute("name");
            const fieldType = element.getAttribute("type");
            const fieldValue = element.value;
            const fieldId = element.getAttribute("id");

            if (fieldName && fieldType !== "hidden" ) {
                if (fieldType === "checkbox") {
                    const isChecked = element.checked;
                    jsonData.fields.push({
                        type: fieldType,
                        label: fieldName,
                        value: isChecked,
                        id: fieldId,
                        dg: element.getAttribute("data-dg") === "true",
                        group: element.getAttribute("data-group"),
                    });
                } else {
                    jsonData.fields.push({
                        type: fieldType, // Vous pouvez définir le type correct ici
                        label: fieldName,
                        value: fieldValue,
                        id: fieldId,
                        dg: false,
                    });
                }
            }
        }

        console.log(JSON.stringify(jsonData, null, 2));

        // // Soumettre les données JSON au serveur en utilisant une requête AJAX
        fetch('{{ route('formulaire.submit') }}',  {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(jsonData)
        })
        .then(response => {
            // Traiter la réponse du serveur ici
            if (response.ok) {
                // Rediriger ou effectuer d'autres actions après la soumission réussie
                window.location.href = '{{ route('usagers.show') }}';
            } else {
                // Gérer les erreurs de soumission
                console.error('Erreur lors de la soumission du formulaire.');
            }
        })
        .catch(error => {
            console.error('Erreur lors de la soumission du formulaire:', error);
        });
    });
});
    </script>
@endsection
