<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Procedures extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedures = [
            [
                'nom' => 'Procédure 1',
                'liens' => 'https://exemple.com/procedure1'
            ],
            [
                'nom' => 'Procédure 2',
                'liens' => 'https://exemple.com/procedure2'
            ],
            // Ajoutez autant de procédures que vous le souhaitez
        ];

        foreach ($procedures as $procedure) {
            DB::table('procedures')->insert([
                'nom' => $procedure['nom'],
                'liens' => $procedure['liens'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
