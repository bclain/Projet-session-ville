<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Departements extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departements = [
            'Direction générale',
            'Approvisionnement',
            'Communications et participation citoyenne',
            'Finances',
            'Greffe, gestion des documents et archives',
            'Ressources humaines',
            'Aménagement et développement durable',
            'Bureau de projets et des actifs',
            'Évaluation',
            'Génie',
            'Technologies de l\'information',
            'Culture, loisirs et vie communautaire',
            'Gestion des eaux et des immeubles',
            'Police',
            'Sécurité incendie et sécurité civile',
            'Services juridiques',
            'Travaux publics'
        ];

        foreach ($departements as $departement) {
            DB::table('departements')->insert([
                'nom_departement' => $departement,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
