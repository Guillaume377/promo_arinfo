<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eleve;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::create([
            'nom' => 'STEPHAN',
            'prenom' => 'Guillaume',
            'age' => '40',
        ]);

        Eleve::create([
            'nom' => 'FOISSEAU',
            'prenom' => 'Hugo',
            'age' => '27',
        ]);

        Eleve::create([
            'nom' => 'VANDEVYVERE',
            'prenom' => 'Alexis',
            'age' => '24',
        ]);

        Eleve::create([
            'nom' => 'FAUCHER',
            'prenom' => 'Sandrine',
            'age' => '47',
        ]);


       



    }
}
