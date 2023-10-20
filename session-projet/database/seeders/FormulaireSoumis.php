<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormulaireSoumis extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $formulaireSoumis = [
            [
                'num_superieur' => '1',
                'num_employe' => '2',
                'data' => [
                    'fields' => [
                        ['type' => 'text', 'label' => 'Nom', 'value' => 'John'],
                        ['type' => 'email', 'label' => 'Email', 'value' => 'john@example.com'],
                        ['type' => 'date', 'label' => 'Date de naissance', 'value' => '1990-01-01'],
                        ['type' => 'textarea', 'label' => 'Commentaires', 'value' => 'Aucun commentaire'],
                        ['type' => 'text', 'label' => 'Pays', 'value' => 'France'],
                        ['type' => 'time', 'label' => 'Heure de rendez-vous', 'value' => '14:00'],
                    ]
                ],
                'type_forms' => 'Type 1'
            ],
            [
                'num_superieur' => '2',
                'num_employe' => '3',
                'data' => [
                    'fields' => [
                        ['type' => 'text', 'label' => 'Nom', 'value' => 'Jane'],
                        ['type' => 'email', 'label' => 'Email', 'value' => 'jane@example.com'],
                        ['type' => 'date', 'label' => 'Date d\'embauche', 'value' => '2020-01-01'],
                        ['type' => 'textarea', 'label' => 'Description', 'value' => 'Description ici'],
                        ['type' => 'text', 'label' => 'Ville', 'value' => 'Paris'],
                        ['type' => 'text', 'label' => 'Code Postal', 'value' => '75000'],
                    ]
                ],
                'type_forms' => 'Type 2'
            ],
            [
                'num_superieur' => '1',
                'num_employe' => '2',
                'data' => [
                    'fields' => [
                        ['type' => 'h3', 'label' => '', 'value' => 'Identification', 'id' => ''],
                        ['type' => 'text', 'label' => 'Nom de l\'employé', 'value' => '', 'id' => '1'],
                        ['type' => 'text', 'label' => 'Fonction au moment de l\'évènement', 'value' => '', 'id' => '2'],
                        ['type' => 'text', 'label' => 'Matricule', 'value' => '', 'id' => '3'],
                        ['type' => 'h3', 'label' => '', 'value' => 'Description de l\'évènement', 'id' => ''],
                        ['type' => 'date', 'label' => 'Date de l\'accident', 'value' => '', 'id' => '4'],
                        ['type' => 'time', 'label' => 'Heure', 'value' => '', 'id' => '5'],
                        ['type' => 'checkbox', 'label' => 'Témoins?', 'value' => true, 'id' => '6'],
                        ['type' => 'text', 'label' => 'Nom Complet', 'value' => 'Antoine Beaudry', 'id' => '7', 'class' => 'conditional'],
                        ['type' => 'text', 'label' => 'Endroit de l\'accident', 'value' => 'Trois-Rivières', 'id' => '9'],
                        ['type' => 'text', 'label' => 'Secteur d\'activité', 'value' => 'Construction', 'id' => '10'],
                        ['type' => 'p', 'label' => 'Nature et site de la blessure (cochez, s\'il y a lieu, côté droit ou gauche)', 'value' => false, 'id' => '11'],
                        ['type' => 'checkbox', 'label' => 'Tête, visage, nez, yeux, oreille D/G', 'value' => '', 'id' => '12', 'dg' => true, 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '13', 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '14', 'group' => 'tete_group'],
                        ['type' => 'checkbox', 'label' => 'Torse', 'value' => true, 'id' => '15', 'dg' => true, 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '16', 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => 'checked', 'id' => '17', 'group' => 'torse_group'],
                    ]
                ],
                'type_forms' => 'Accident de travail'
            ]
            
        ];

        foreach ($formulaires as $formulaire) {
            DB::table('formulaires')->insert([
                'num_superieur' => $formulaire['num_superieur'],
                'num_employe' => $formulaire['num_employe'],
                'data' => json_encode($formulaire['data']),
                'type_forms' => $formulaire['type_forms'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
