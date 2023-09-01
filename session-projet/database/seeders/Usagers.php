<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usagers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('usagers')->insert([

            [               
                'nom' => 'N/A',
                'num_superieur' => '',
                'position' => '',
                'droit_employe' => 'n',
                'droit_superieur' => 'n',
                'droit_admin' => 'n'
            ],
            [               
                'nom' => 'Marc Pépin',
                'num_superieur' => '3',
                'position' => 'Journalier TP',
                'droit_employe' => 'o',
                'droit_superieur' => 'n',
                'droit_admin' => 'n'
            ],
            [               
                'nom' => 'Jane Dow',
                'num_superieur' => '4',
                'position' => 'Cheffe d\'équipe TP',
                'droit_employe' => 'o',
                'droit_superieur' => 'o',
                'droit_admin' => 'n'
            ],
            [               
                'nom' => 'Jonathan Morinville',
                'num_superieur' => '5',
                'position' => 'Chef de service TP',
                'droit_employe' => 'o',
                'droit_superieur' => 'o',
                'droit_admin' => 'o'
            ],
            [               
                'nom' => 'Alain Lizotte',
                'num_superieur' => '1',
                'position' => 'Chef de service TP',
                'droit_employe' => 'o',
                'droit_superieur' => 'o',
                'droit_admin' => 'n'
            ],
            
        ]);
        dd('Seeder is running');  
    }
}
