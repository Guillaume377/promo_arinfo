<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diplome;


class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diplome::create([
            'nom' => 'Développeur Web et Web Mobile',
            'formateur_id' => 1,
        ]);

        Diplome::create([
            'nom' => 'Infographiste Metteur en Page',
            'formateur_id' => 2,
        ]);

        Diplome::create([
            'nom' => 'Concepteur Developpeur UI',
            'formateur_id' => 3,  
        ]);

        Diplome::create([
            'nom' => "Concepteur Développeur d'Applications",
            'formateur_id' => 4,
        ]);
    }
}
