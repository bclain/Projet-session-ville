<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'data' => json_encode(['champ1' => 'valeur1', 'champ2' => 'valeur2']),
                'type_forms' => 'Type 1'
            ],
            [
                'num_superieur' => '2',
                'num_employe' => '3',
                'data' => json_encode(['champ1' => 'valeur3', 'champ2' => 'valeur4']),
                'type_forms' => 'Type 2'
            ],
        ];

        foreach ($formulaires as $formulaire) {
            DB::table('formulaires')->insert([
                'num_superieur' => $formulaire['num_superieur'],
                'num_employe' => $formulaire['num_employe'],
                'data' => $formulaire['data'],
                'type_forms' => $formulaire['type_forms'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}