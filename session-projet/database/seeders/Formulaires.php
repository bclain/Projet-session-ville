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
                        ['type' => 'text', 'label' => 'Nom', 'value' => null, 'id' => 'nom', 'required' => true],
                        ['type' => 'text', 'label' => 'Lieu(x) des travaux', 'value' => null, 'id' => 'lieux_travaux', 'required' => true],
                        ['type' => 'date', 'label' => 'Date', 'value' => null, 'id' => 'date', 'required' => true],
                        ['type' => 'time', 'label' => 'Heure', 'value' => null, 'id' => 'heure', 'required' => true],
                        ['type' => 'checkbox', 'label' => 'EPI', 'value' => null, 'id' => 'epi', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Tenue des lieux', 'value' => null, 'id' => 'tenue_lieux', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Comportement sécuritaire', 'value' => null, 'id' => 'comportement_securitaire', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Signalisation', 'value' => null, 'id' => 'signalisation', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Fiches signalétiques', 'value' => null, 'id' => 'fiches_signaletiques', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Travaux - Excavation', 'value' => null, 'id' => 'travaux_excavation', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Espace clos', 'value' => null, 'id' => 'espace_clos', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Méthode de travail', 'value' => null, 'id' => 'methode_travail', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Autre(s) Travaux en hauteur', 'value' => null, 'id' => 'travaux_hauteur', 'required' => false],
                        ['type' => 'section', 'label' => 'Covid 19', 'id' => 'covid_19'],
                        ['type' => 'checkbox', 'label' => 'Respect de la distanciation', 'value' => null, 'id' => 'respect_distanciation', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Port des EPI (masque/visière)', 'value' => null, 'id' => 'port_epi', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Respect des procédures établies', 'value' => null, 'id' => 'respect_procedures', 'required' => false]
                    ]
                ],
                'type_forms' => 'Grille Audit SST'
            ],
            [
                'data' => [
                    'fields' => [
                        ['type' => 'text', 'label' => 'Numéro(s) d\'unité(s) impliqué(s) *', 'value' => null, 'id' => 'num_unites_impliques', 'required' => true],
                        ['type' => 'text', 'label' => 'Département', 'value' => null, 'id' => 'departement', 'required' => true],
                        ['type' => 'text', 'label' => 'Prénom et nom de l\'employé impliqué', 'value' => null, 'id' => 'nom_employe_implique', 'required' => true],
                        ['type' => 'text', 'label' => 'Prénom et nom du supérieur immédiat', 'value' => null, 'id' => 'nom_superieur_immediat', 'required' => true],
                        ['type' => 'text', 'label' => 'Numéro du permis de conduire de l\'employé', 'value' => null, 'id' => 'num_permis_conduire', 'required' => true],
                        ['type' => 'section', 'label' => 'Autres véhicules impliqués (citoyen)', 'id' => 'autres_vehicules'],
                        ['type' => 'checkbox', 'label' => 'Oui', 'value' => null, 'id' => 'oui', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'Non', 'value' => null, 'id' => 'non', 'required' => false]
                    ]
                ],
                'type_forms' => "Rapport d'incidence"
            ],
            [
                'data' => [
                    'fields' => [
                        ['type' => 'text', 'label' => 'Nom', 'value' => null, 'id' => 'nom', 'required' => true],
                        ['type' => 'text', 'label' => 'Prénom', 'value' => null, 'id' => 'prenom', 'required' => false],
                        ['type' => 'text', 'label' => 'Matricule', 'value' => null, 'id' => 'matricule', 'required' => false],
                        ['type' => 'text', 'label' => 'Fonction au moment de l\'évènement', 'value' => null, 'id' => 'fonction_evenement', 'required' => false],
                        ['type' => 'text', 'label' => 'Secteur d\'activité', 'value' => null, 'id' => 'secteur_activite', 'required' => false],
                        ['type' => 'date', 'label' => 'Date de l\'observation', 'value' => null, 'id' => 'date_observation', 'required' => false],
                        ['type' => 'text', 'label' => 'Heure de l\'observation', 'value' => null, 'id' => 'heure_observation', 'required' => false],
                        ['type' => 'text', 'label' => 'Lieu', 'value' => null, 'id' => 'lieu', 'required' => false],
                        ['type' => 'text', 'label' => 'Témoin 1', 'value' => null, 'id' => 'temoin1', 'required' => false],
                        ['type' => 'text', 'label' => 'Témoin 2', 'value' => null, 'id' => 'temoin2', 'required' => false],
                        ['type' => 'textarea', 'label' => 'Déscription', 'value' => null, 'id' => 'description', 'required' => false],
                        ['type' => 'textarea', 'label' => 'Correction(s) ou amélioration(s) proposée(s):', 'value' => null, 'id' => 'corrections_ameliorations', 'required' => false],
                        ['type' => 'checkbox', 'label' => 'J\'ai avisé mon supérieur immédiat', 'value' => null, 'id' => 'avis_superieur', 'required' => false]
                    ]
                ],
                'type_forms' => "Signalement d'une situation dangereuse, d'un acte de violence ou d'un \"passé proche\""
            ],
            [
                'data' => [
                    'fields' => [
                        ['type' => 'h3', 'label' => '', 'value' => 'Identification', 'id' => '0', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom de l\'employé', 'value' => '', 'id' => '1', 'dg' => false],
                        ['type' => 'text', 'label' => 'Fonction au moment de l\'évènement', 'value' => '', 'id' => '2', 'dg' => false],
                        ['type' => 'text', 'label' => 'Matricule', 'value' => '', 'id' => '3', 'dg' => false],
                        ['type' => 'h3', 'label' => '', 'value' => 'Description de l\'évènement', 'id' => '', 'dg' => false],
                        ['type' => 'date', 'label' => 'Date de l\'accident', 'value' => '', 'id' => '4', 'dg' => false],
                        ['type' => 'time', 'label' => 'Heure', 'value' => '', 'id' => '5', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Témoins?', 'value' => false, 'id' => '6', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet témoin 1', 'value' => '', 'id' => '7', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Nom Complet témoin 2', 'value' => '', 'id' => '8', 'class' => 'conditional', 'dg' => false],
                        ['type' => 'text', 'label' => 'Endroit de l\'accident', 'value' => '', 'id' => '9', 'dg' => false],
                        ['type' => 'text', 'label' => 'Secteur d\'activité', 'value' => '', 'id' => '10', 'dg' => false],
                        ['type' => 'p', 'label' => 'Nature et site de la blessure (cochez, s\'il y a lieu, côté droit ou DDroite)', 'value' => false, 'id' => '11', 'dg' => false],
                        ['type' => 'checkbox', 'label' => 'Tête, visage, nez, yeux, oreille D/G', 'value' => '', 'id' => '12', 'dg' => true, 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '13', 'dg' => false, 'group' => 'tete_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '14', 'dg' => false, 'group' => 'tete_group'],
                        ['type' => 'checkbox', 'label' => 'Torse', 'value' => '', 'id' => '15', 'dg' => true, 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '16', 'dg' => false, 'group' => 'torse_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '17', 'dg' => false, 'group' => 'torse_group'],
                        ['type' => 'checkbox', 'label' => 'Poumon', 'value' => '', 'id' => '18', 'dg' => true, 'group' => 'poumon_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '19', 'dg' => false, 'group' => 'poumon_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '20', 'dg' => false, 'group' => 'poumon_group'],
                        ['type' => 'checkbox', 'label' => 'Bras, épaule, coude', 'value' => '', 'id' => '31', 'dg' => true, 'group' => 'bras_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '21', 'dg' => false, 'group' => 'bras_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '22', 'dg' => false, 'group' => 'bras_group'],
                        ['type' => 'checkbox', 'label' => 'Poignets, main, doigt', 'value' => '', 'id' => '24', 'dg' => true, 'group' => 'main_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '23', 'dg' => false, 'group' => 'main_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '25', 'dg' => false, 'group' => 'main_group'],
                        ['type' => 'checkbox', 'label' => 'Dos Haut/ Bas', 'value' => '', 'id' => '26', 'dg' => true, 'group' => 'dos_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '27', 'dg' => false, 'group' => 'dos_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '28', 'dg' => false, 'group' => 'dos_group'],
                        ['type' => 'checkbox', 'label' => 'Hanche D/G', 'value' => '', 'id' => '29', 'dg' => true, 'group' => 'hanche_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '30', 'dg' => false, 'group' => 'hanche_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '32', 'dg' => false, 'group' => 'hanche_group'],
                        ['type' => 'checkbox', 'label' => 'Jambe, genou D/G', 'value' => '', 'id' => '33', 'dg' => true, 'group' => 'jambe_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '34', 'dg' => false, 'group' => 'jambe_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '35', 'dg' => false, 'group' => 'jambe_group'],
                        ['type' => 'checkbox', 'label' => 'Pied, orteil, cheville', 'value' => '', 'id' => 'pied_dg', 'dg' => true, 'group' => 'pied_group'],
                        ['type' => 'radio', 'label' => 'Gauche', 'value' => '', 'id' => '36', 'dg' => false, 'group' => 'pied_group'],
                        ['type' => 'radio', 'label' => 'Droite', 'value' => '', 'id' => '37', 'dg' => false, 'group' => 'pied_group'],
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