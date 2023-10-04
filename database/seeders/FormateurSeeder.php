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
    }
}
