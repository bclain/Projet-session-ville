<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Formulaires extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formulaires = [
            [
                'data' => [
                    'fields' => [
                        ['type' => 'checkbox', 'label' => 'Ouvrir', 'value' => false, 'id' => 'ouvrir'],
                        ['type' => 'radio', 'label' => 'Option 1', 'value' => 'option1', 'name' => 'options', 'id' => 'option1', 'class' => 'conditional'],
                        ['type' => 'radio', 'label' => 'Option 2', 'value' => 'option2', 'name' => 'options', 'id' => 'option2', 'class' => 'conditional'],
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
                'data' => [
                    'fields' => [
                        ['type' => 'h3', 'label' => '', 'value' => 'Identification', 'id' => '', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom de l\'employé', 'value' => '', 'id' => '1', 'dg' => false],
                        ['type' => 'text', 'label' => 'Fonction au moment de l\'évènement', 'value' => '', 'id' => '2', 'dg' => false],
                        ['type' => 'text', 'label' => 'Matricule', 'value' => '', 'id' => '3', 'dg' => false],
                        ['type' => 'h3', 'label' => '', 'value' => 'Description de l\'évènement', 'id' => '', 'dg' => false],
                        ['type' => 'date', 'label' => 'Date de l\'accident', 'value' => '', 'id' => '4', 'dg' => false],
                        ['type' => 'time', 'label' => 'Heure', 'value' => '', 'id' => '5', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Témoins?', 'value' => false, 'id' => '6', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet', 'value' => '', 'id' => '7', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet', 'value' => '', 'id' => '8', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Endroit de l\'accident', 'value' => '', 'id' => '9', 'dg' => false],
                        ['type' => 'text', 'label' => 'Secteur d\'activité', 'value' => '', 'id' => '10', 'dg' => false],
                        ['type' => 'p', 'label' => 'Nature et site de la blessure (cochez, s\'il y a lieu, côté droit ou gauche)', 'value' => false, 'id' => '11', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Tête, visage, nez, yeux, oreille D/G', 'value' => '', 'id' => '12', 'dg' => true, 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '13', 'dg' => false, 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '14', 'dg' => false, 'group' => 'tete_group'],
                        ['type' => 'checkbox', 'label' => 'Torse', 'value' => '', 'id' => '15', 'dg' => true, 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '16', 'dg' => false, 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '17', 'dg' => false, 'group' => 'torse_group'],
                        ['type' => 'checkbox', 'label' => 'Poumon', 'value' => '', 'id' => '18', 'dg' => true, 'group' => 'poumon_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '19', 'dg' => false, 'group' => 'poumon_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '20', 'dg' => false, 'group' => 'poumon_group'],
                        ['type' => 'checkbox', 'label' => 'Bras, épaule, coude', 'value' => '', 'id' => '31', 'dg' => true, 'group' => 'bras_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '21', 'dg' => false, 'group' => 'bras_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '22', 'dg' => false, 'group' => 'bras_group'],
                        ['type' => 'checkbox', 'label' => 'Poignets, main, doigt', 'value' => '', 'id' => '24', 'dg' => true, 'group' => 'main_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '23', 'dg' => false, 'group' => 'main_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '25', 'dg' => false, 'group' => 'main_group'],
                        ['type' => 'checkbox', 'label' => 'Dos Haut/ Bas', 'value' => '', 'id' => '26', 'dg' => true, 'group' => 'dos_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '27', 'dg' => false, 'group' => 'dos_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '28', 'dg' => false, 'group' => 'dos_group'],
                        ['type' => 'checkbox', 'label' => 'Hanche D/G', 'value' => '', 'id' => '29', 'dg' => true, 'group' => 'hanche_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '30', 'dg' => false, 'group' => 'hanche_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '32', 'dg' => false, 'group' => 'hanche_group'],
                        ['type' => 'checkbox', 'label' => 'Jambe, genou D/G', 'value' => '', 'id' => '33', 'dg' => true, 'group' => 'jambe_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '34', 'dg' => false, 'group' => 'jambe_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '35', 'dg' => false, 'group' => 'jambe_group'],
                        ['type' => 'checkbox', 'label' => 'Pied, orteil, cheville', 'value' => '', 'id' => 'pied_dg', 'dg' => true, 'group' => 'pied_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '36', 'dg' => false, 'group' => 'pied_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '37', 'dg' => false, 'group' => 'pied_group'],
                    ]
                ],
                'type_forms' => 'Accident de travail'
            ]
            
        ];

        foreach ($formulaires as $formulaire) {
            DB::table('formulaires')->insert([
                'data' => json_encode($formulaire['data']),
                'type_forms' => $formulaire['type_forms'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
