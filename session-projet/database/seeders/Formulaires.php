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
            [
                'num_superieur' => '1',
                'num_employe' => '2',
                'data' => [
                    'fields' => [
                        ['type' => 'h3', 'label' => '', 'value' => 'Identification', 'id' => '', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom de l\'employé', 'value' => '', 'id' => 'nom_employe', 'dg' => false],
                        ['type' => 'text', 'label' => 'Fonction au moment de l\'évènement', 'value' => '', 'id' => 'fonction', 'dg' => false],
                        ['type' => 'text', 'label' => 'Matricule', 'value' => '', 'id' => 'matricule', 'dg' => false],
                        ['type' => 'h3', 'label' => '', 'value' => 'Description de l\'évènement', 'id' => '', 'dg' => false],
                        ['type' => 'date', 'label' => 'Date de l\'accident', 'value' => '', 'id' => 'date_accident', 'dg' => false],
                        ['type' => 'time', 'label' => 'Heure', 'value' => '', 'id' => 'time_accident', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Témoins?', 'value' => false, 'id' => 'ouvrir', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet', 'value' => '', 'id' => 'temoin1', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet', 'value' => '', 'id' => 'temoin2', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Endroit de l\'accident', 'value' => '', 'id' => 'endroitEmpl', 'dg' => false],
                        ['type' => 'text', 'label' => 'Secteur d\'activité', 'value' => '', 'id' => 'secteur_activite', 'dg' => false],
                        ['type' => 'p', 'label' => 'Nature et site de la blessure (cochez, s\'il y a lieu, côté droit ou gauche)', 'value' => false, 'id' => 'nature_blessure', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Tête, visage, nez, yeux, oreille D/G', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => true],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Torse', 'value' => '', 'id' => 'torse', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Poumon', 'value' => '', 'id' => 'poumon', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Bras, épaule, coude', 'value' => '', 'id' => 'bras_epaule_coude', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Poignets, main, doigt', 'value' => '', 'id' => 'poignets_main_doigt', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Dos Haut/ Bas', 'value' => '', 'id' => 'dos_haut_bas', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Hanche D/G', 'value' => '', 'id' => 'hanche_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Jambe, genou D/G', 'value' => '', 'id' => 'jambe_genou_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Pied, orteil, cheville', 'value' => '', 'id' => 'pied_orteil_cheville', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Oui', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                        ['type' => 'radio', 'label' => 'Non', 'value' => '', 'id' => 'tete_visage_nez_yeux_oreille_dg', 'dg' => false],
                    ]
                    
                ],
                'type_forms' => 'Accident de travail'
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
