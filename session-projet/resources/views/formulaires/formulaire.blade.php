@extends('layouts.app')

@section('Mid')
    <section style="">
        <div class="contain">
            <h1>{{ $formulaire->type_forms }}</h1>

            <form id="myForm" class="formulaire" action="#" method="post">
                @csrf
                @php
                    $fields = $formulaire->data['fields'] ?? [];
                    $currentDate = date('Y-m-d'); // Date actuelle au format YYYY-MM-DD
                    $currentTime = date('H:i'); // Heure actuelle au format HH:MM
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
                                {{ $field['dg'] ? 'data-dg=true' : '' }} data-group="{{ $field['group'] ?? '' }}"
                                {{ $field['value'] ? 'checked' : '' }}>
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                        </div>
                    @endif

                    @if ($field['type'] === 'h1')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h1>{{ $field['value'] }}</h1>
                        </div>
                    @elseif($field['type'] === 'h2')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h2>{{ $field['value'] }}</h2>
                        </div>
                    @elseif($field['type'] === 'h3')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <h3 class="h3">{{ $field['value'] }} {{ $field['label'] }}</h3>
                        </div>
                    @elseif($field['type'] === 'p')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <span>{{ $field['value'] }}</span>
                        </div>

                    @elseif ($field['type'] === 'date')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                            <input type="date" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control"
                                {{ $field['required'] ?? false ? 'required' : '' }} >
                        </div>
                    @elseif ($field['type'] === 'time')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                            <input type="time" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control"
                                {{ $field['required'] ?? false ? 'required' : '' }} >
                        </div>                    
                    @elseif($field['type'] === 'textarea')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                            <textarea id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control"
                                {{ $field['required'] ?? false ? 'required' : '' }}>
                            </textarea>
                        </div>
                    @elseif($field['type'] === 'conformite')
                        <div class="form-group conformite-div {{ $field['class'] ?? '' }}">
                            <h4 class="{{ $field['id'] }}">{{ $field['label'] }}</h4>
                            <div>
                                <input type="checkbox" class="conf{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control conf-option">
                            <label for="{{ $field['id'] }}">Conforme</label>
                            </div>
                            <div>
                                <input type="checkbox" id="no{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control conf-option">
                            <label for="no{{ $field['id'] }}">Non-conforme</label>
                            </div>
                            <div>
                                <input type="checkbox" class="n{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="null" class="form-control conf-option">
                            <label for="n{{ $field['id'] }}"> N/A </label>
                            </div>
                        </div>
                    @elseif($field['type'] !== 'radio' && $field['type'] !== 'checkbox')
                        <div class="form-group {{ $field['class'] ?? '' }}">
                            <label for="{{ $field['id'] }}">{{ $field['label'] }}</label>
                            <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" name="{{ $field['label'] }}"
                                value="{{ $field['value'] }}" class="form-control"
                                {{ $field['required'] ?? false ? 'required' : '' }}>
                        </div>
                    @endif
                @endforeach

                <div class="form-submit">
                    <button type="submit" class="btn-base">Soumettre le formulaire</button>
                </div>

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


            var checkboxes = document.querySelectorAll('.conformite-div input[type="checkbox"]');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        // Décocher toutes les autres cases à cocher du même groupe
                        var groupName = checkbox.name;
                        checkboxes.forEach(function(box) {
                            if (box.name === groupName && box !== checkbox) {
                                box.checked = false;
                            }
                        });
                    }
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




                let isValid = true;
                const jsonData = {
                    type_formulaire: document.querySelector('input[name="type_formulaire"]').value,
                    fields: [],
                };

                const formElements = form.elements;
                for (let i = 0; i < formElements.length; i++) {
                    const element = formElements[i];
                    const fieldName = element.getAttribute("name");
                    const fieldType = element.getAttribute("type");
                    const fieldValue = element.value;
                    const fieldId = element.getAttribute("id");
                    const isRequired = element.hasAttribute("required");

                    // Valider les champs requis
                    if (isRequired && !fieldValue.trim()) {
                        isValid = false;
                        // Afficher un message d'erreur
                        showError(element, `Le champ ${fieldName} est requis.`);
                    } else {
                        clearError(element);
                        isValid = true;
                    }

                    // Construire le JSON pour les champs autres que hidden
                    if (fieldName && fieldType !== "hidden") {
                        // ... (comme dans votre script actuel)
                    }
                }

                if (isValid) {
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

                        if (fieldName && fieldType !== "hidden") {
                            if (fieldType === "checkbox" && element.classList.contains("conf-option")) {
                            // Vérifier si la case à cocher est cochée
                                if (element.checked) {
                                    // Trouver le label correspondant (texte du h4)
                                    const h4Element = element.closest('.form-group').querySelector('h4');
                                    const label = h4Element ? h4Element.textContent.trim() : "Label inconnu";

                                    // Ajouter le champ de conformité au JSON seulement si la case est cochée
                                    jsonData.fields.push({
                                        dg: false,
                                        id: fieldId,
                                        type: "conformite",
                                        label: label,
                                        value: element.value,
                                        required: false
                                    });
                                }
                            else if (fieldType === "checkbox") {
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
                    fetch('{{ route('formulaire.submit') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
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
                } else {
                    console.error("Validation échouée");
                }
            });


        });

        function showError(element, message) {
            // Vérifier si un message d'erreur existe déjà
            let error = element.parentNode.querySelector('.error-message');
            if (!error) {
                // Créer un élément de message d'erreur
                error = document.createElement('span');
                error.className = 'error-message';
                error.style.color = 'red'; // Vous pouvez personnaliser le style
                error.innerText = message;
                element.parentNode.appendChild(error);
            } else {
                // Mettre à jour le texte si un message d'erreur existe déjà
                error.innerText = message;
            }
        }

        function clearError(element) {
            // Trouver et supprimer le message d'erreur
            const error = element.parentNode.querySelector('.error-message');
            if (error) {
                element.parentNode.removeChild(error);
            }
        }
    </script>
@endsection
