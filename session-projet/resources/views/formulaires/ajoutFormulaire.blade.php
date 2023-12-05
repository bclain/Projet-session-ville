@extends('layouts.app')

@section('Mid')
    <section style="form-principal">
        <div class="contain formulaire form-build">
            <h2>Ajout de formulaire</h2>

            <div class="form-group">
                <label>Type de formulaire: </label>
                <input type="text" id="type_formulaire" placeholder="Entrez le type du formulaire">
            </div>

            <form id="formBuilder">
                <!-- Les champs de formulaire seront ajoutés ici -->
            </form>
            <div class="ajout">
                <h5>Ajouter</h5>
                <button class="btn-scnd" onclick="addTextField()">Un champ</button>
                <button class="btn-scnd" onclick="addField()">Un titre</button>
                <button class="btn-scnd" onclick="addCheckbox()">Une case à cocher</button>
            </div>
            {{-- <pre id="jsonOutput"></pre>
            <button onclick="generateJSON()">Générer JSON</button> --}}


        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let fieldCount = 0; // Compteur pour les champs ajoutés

            // Fonction pour ajouter un champ de texte
            window.addTextField = function() {
                const form = document.getElementById('formBuilder');
                const div = document.createElement('div');
                div.className = 'form-group';

                const divlabel = document.createElement('div');
                divlabel.className = 'label-group';

                // Création de l'étiquette (label)
                const label = document.createElement('input');
                label.type = 'text';
                label.id = 'label' + fieldCount;
                label.className = 'form-control label';
                label.placeholder = 'Entrez une question à poser';

                // Création du champ de sélection
                const select = document.createElement('select');
                select.className = 'form-control input-not';
                select.id = 'input' + fieldCount;

                // Options pour le champ de sélection
                const options = ['texte', 'long texte', 'heure', 'date'];
                options.forEach(function(optionText) {
                    let option = document.createElement('option');
                    option.value = optionText;
                    option.text = optionText;
                    select.appendChild(option);
                });

                divlabel.appendChild(label);
                div.appendChild(divlabel);
                div.appendChild(select);
                addRemoveButton(div, form);

                form.appendChild(div);
                fieldCount++;
            };

            // Fonction pour ajouter une case à cocher
            window.addCheckbox = function() {
                const form = document.getElementById('formBuilder');
                const div = document.createElement('div');
                div.className = 'form-group';

                const input = document.createElement('input');
                input.type = 'checkbox';
                input.id = 'field' + fieldCount;
                input.name = 'Tête, visage, nez, yeux, oreille D/G';
                input.className = 'form-control';
                input.setAttribute('data-dg', 'true');
                input.setAttribute('data-group', 'tete_group');

                const label = document.createElement('label');
                label.setAttribute('for', 'field' + fieldCount);
                label.textContent = 'Tête, visage, nez, yeux, oreille D/G';

                div.appendChild(input);
                div.appendChild(label);
                addRemoveButton(div, form);

                form.appendChild(div);
                fieldCount++;
            };

            // Fonction pour ajouter un bouton de suppression
            function addRemoveButton(element, form) {
                const removeButton = document.createElement('button');
                removeButton.textContent = 'Supprimer';
                removeButton.onclick = function() {
                    form.removeChild(element);
                };
                element.appendChild(removeButton);
            }
        });
    </script>
@endsection
