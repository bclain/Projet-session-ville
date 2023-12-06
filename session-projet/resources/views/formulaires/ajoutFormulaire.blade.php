@extends('layouts.app')

@section('Mid')
    <section style="form-principal">
        <div class="contain formulaire form-build">
            <h2>Ajout de formulaire</h2>

            <div class="form-group">
                <label>Type de formulaire: </label>
                <input type="text"  name="type_formulaire"  id="type_formulaire" placeholder="Entrez le type du formulaire">
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
            <button class="btn-base" onclick="submitForm()">Ajouter le formulaire</button>

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

                // Ajout du titre "Champ"
                const title = document.createElement('h4');
                title.innerText = 'Champ';
                div.appendChild(title);

                const divlabel = document.createElement('div');
                divlabel.className = 'label-group';

                // Création de l'étiquette (label)
                const label = document.createElement('input');
                label.type = 'text';
                label.id = 'label' + fieldCount;
                label.className = 'form-control label';
                label.placeholder = 'Entrez une question à poser';
                label.required = true; // Ajout de l'attribut 'required'

                // Création du champ de sélection
                const select = document.createElement('select');
                select.className = 'form-control input-not';
                select.id = 'input' + fieldCount;

                // Options pour le champ de sélection
                const options = ['text', 'long texte', 'heure', 'date', 'conformité'];
                options.forEach(function(optionText) {
                    let option = document.createElement('option');
                    option.value = optionText;
                    option.text = optionText;
                    select.appendChild(option);
                });

                // Ajouter une case à cocher "Requis"
                const checkboxDiv = document.createElement('div');
                checkboxDiv.className = 'checkbox-group';

                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.id = 'required' + fieldCount;
                checkbox.className = 'form-check-input';

                const checkboxLabel = document.createElement('label');
                checkboxLabel.className = 'form-check-label';
                checkboxLabel.htmlFor = 'required' + fieldCount;
                checkboxLabel.innerText = 'Requis';

                checkboxDiv.appendChild(checkbox);
                checkboxDiv.appendChild(checkboxLabel);

                divlabel.appendChild(label);
                div.appendChild(divlabel);
                div.appendChild(select);
                div.appendChild(checkboxDiv);
                addRemoveButton(div, form);

                form.appendChild(div);
                fieldCount++;
            };


            // Fonction pour ajouter un champ de texte
            window.addField = function() {
                const form = document.getElementById('formBuilder');
                const div = document.createElement('div');
                div.className = 'form-group';

                // Ajout du titre "Titre"
                const title = document.createElement('h4');
                title.innerText = 'Titre';
                div.appendChild(title);

                const divlabel = document.createElement('div');
                divlabel.className = 'label-group';

                // Création de l'étiquette (h3)
                const h3 = document.createElement('input');
                h3.type = 'text';
                h3.id = 'label' + fieldCount;
                h3.className = 'form-control h3';
                h3.placeholder = 'Entrez un titre';
                h3.required = true; // Ajout de l'attribut 'required'

                divlabel.appendChild(h3);
                div.appendChild(divlabel);
                addRemoveButton(div, form);
                form.appendChild(div);
                fieldCount++;
            };

            window.addCheckbox = function() {
                const form = document.getElementById('formBuilder');
                const div = document.createElement('div');
                div.className = 'form-group';

                // Ajout du titre "Case à cocher"
                const title = document.createElement('h4');
                title.innerText = 'Case à cocher';
                div.appendChild(title);

                const checkboxDiv = document.createElement('div');
                checkboxDiv.className = 'checkbox-input-group';

                // Création de la case à cocher
                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.id = 'field' + fieldCount;
                checkbox.name = 'checkbox' + fieldCount;
                checkbox.className = 'form-check-input';
                checkbox.setAttribute('onclick', 'return false;');

                // Création du champ de saisie pour l'étiquette
                const inputLabel = document.createElement('input');
                inputLabel.type = 'text';
                inputLabel.id = 'labelField' + fieldCount;
                inputLabel.className = 'form-control';
                inputLabel.placeholder = 'Entrez le texte de la case';
                inputLabel.required = true; // Ajout de l'attribut 'required'

                // Ajout de la case à cocher et du champ de saisie à la div
                checkboxDiv.appendChild(checkbox);
                checkboxDiv.appendChild(inputLabel);

                // Création de la div pour le label et le sélecteur Droite/Gauche
                const sideSelectorDiv = document.createElement('div');
                sideSelectorDiv.className = 'side-selector-group';

                // Création du label pour le sélecteur Droite/Gauche
                const selectorLabel = document.createElement('label');
                selectorLabel.textContent = 'Droite/Gauche :';
                selectorLabel.htmlFor = 'sideSelect' + fieldCount;
                selectorLabel.className = 'form-control-label';

                // Création du sélecteur Droite/Gauche
                const sideSelector = document.createElement('select');
                sideSelector.id = 'sideSelect' + fieldCount;
                sideSelector.className = 'form-control';


                const optionNo = document.createElement('option');
                optionNo.value = 'non';
                optionNo.textContent = 'Non';
                sideSelector.appendChild(optionNo);

                const optionYes = document.createElement('option');
                optionYes.value = 'oui';
                optionYes.textContent = 'Oui';
                sideSelector.appendChild(optionYes);


                // Ajout du label et du sélecteur à la div spécifique
                sideSelectorDiv.appendChild(selectorLabel);
                sideSelectorDiv.appendChild(sideSelector);

                // Ajout des éléments à la div principale
                div.appendChild(checkboxDiv);
                div.appendChild(sideSelectorDiv);
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
                    updateIds(form);
                };
                element.appendChild(removeButton);
            }

            function updateIds(form) {
                // Récupérer tous les éléments de formulaire
                const fieldDivs = form.getElementsByClassName('form-group');

                // Parcourir chaque élément et mettre à jour son ID et les ID des éléments enfants
                for (let i = 0; i < fieldDivs.length; i++) {
                    const fieldDiv = fieldDivs[i];
                    const inputs = fieldDiv.querySelectorAll('input, select');

                    inputs.forEach(input => {
                        const baseId = input.id.match(/[a-zA-Z]+/)[
                            0]; // Extraire la partie textuelle de l'ID
                        input.id = baseId + i; // Assigner un nouvel ID basé sur la position actuelle
                    });
                }
                fieldCount--;
            }

            window.submitForm = function() {
                const form = document.getElementById('formBuilder');
                const formData = {
                        type_formulaire: document.querySelector('input[name="type_formulaire"]').value,
                        fields: [],
                };

                // Parcourir les champs du formulaire
                for (let i = 0; i < fieldCount; i++) {
                    let isCheckbox = document.getElementById('field' + i) && document.getElementById('field' +
                        i).type === 'checkbox';
                    let isTitle = document.getElementById('label' + i) && document.getElementById('label' + i)
                        .classList.contains('h3');
                    let labelElement = document.getElementById('label' + i);
                    let fieldType = "text";
                    let dgValue = false;

                    // Vérifier l'état de la case à cocher "Requis" pour le champ
                    let requiredCheckbox = document.getElementById('required' + i);
                    let required = requiredCheckbox ? requiredCheckbox.checked : false;

                    // Gestion des types de champs et de leurs labels
                    if (isCheckbox) {
                        // Pour les cases à cocher, utilisez le label spécifique de la case à cocher
                        labelElement = document.getElementById('labelField' + i);
                        fieldType = "checkbox";
                        let sideSelectValue = document.getElementById('sideSelect' + i) ? document
                            .getElementById('sideSelect' + i).value : "non";
                        dgValue = sideSelectValue === 'oui';
                    } else if (isTitle) {
                        // Pour les titres (h3), le type est 'h3'
                        fieldType = "h3";
                    } else {
                        // Pour les autres types de champs
                        fieldType = document.getElementById('input' + i) ? document.getElementById('input' + i)
                            .value : "text";
                        if (fieldType === "long texte") {
                            fieldType = "textarea";
                        } else if (fieldType === "temps" || fieldType === "heure") {
                            fieldType = "time";
                        }
                    }

                    let fieldData = {
                        dg: dgValue,
                        id: String(i),
                        type: fieldType,
                        label: labelElement ? labelElement.value :
                        "", // Utilisez le label approprié en fonction du type de champ
                        value: "",
                        required: required // Utilisez l'état de la case à cocher 'required'
                    };

                    formData.fields.push(fieldData);
                }
                // Afficher le JSON généré
                console.log(JSON.stringify(formData, null, 2));
                // Vous pouvez également afficher le JSON dans un élément HTML si nécessaire

                // // Soumettre les données JSON au serveur en utilisant une requête AJAX
                fetch('{{ route('formulaire.add') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify(formData)
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

                };


        });
    </script>
@endsection
