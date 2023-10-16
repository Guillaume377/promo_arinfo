<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formateur;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formateur::create([
            'nom' => 'VIROT',
            'prenom' => 'Hugo',
            'age' => 35,
        ]);

        Formateur::create([
            'nom' => 'LEBLANC',
            'prenom' => 'Juste',
            'age' => '52',
        ]);

        Formateur::create([
            'nom' => 'BON',
            'prenom' => 'Jean',
            'age' => '45',
        ]);

        Formateur::create([
            'nom' => 'DE RE',
            'prenom' => 'Odile',
            'age' => '38',
        ]);


    }
}
