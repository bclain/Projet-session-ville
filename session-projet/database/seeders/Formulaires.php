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
                'num_superieur' => '1',
                'num_employe' => '2',
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
