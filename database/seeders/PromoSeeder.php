<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promo::create([
            'diplome_id' => 1,
            'date_debut'=> "2021-10-01",
            'date_fin' => "2022-03-31",
        ]);

        Promo::create([
            'diplome_id' => 2,
            'date_debut'=> "2021-10-01",
            'date_fin' => "2022-03-31",
        ]);

        Promo::create([
            'diplome_id' => 3,
            'date_debut'=> "2021-10-01",
            'date_fin' => "2022-03-31",
        ]);

        Promo::create([
            'diplome_id' => 4,
            'date_debut'=> "2021-10-01",
            'date_fin' => "2022-03-31",
        ]);

        Promo::create([
            'diplome_id' => 1,
            'date_debut'=> "2022-10-01",
            'date_fin' => "2023-03-31",
        ]);

        Promo::create([
            'diplome_id' => 2,
            'date_debut'=> "2022-10-01",
            'date_fin' => "2023-03-31",
        ]);

        Promo::create([
            'diplome_id' => 3,
            'date_debut'=> "2022-10-01",
            'date_fin' => "2023-03-31",
        ]);

        Promo::create([
            'diplome_id' => 4,
            'date_debut'=> "2022-10-01",
            'date_fin' => "2023-03-31",
        ]);

    }
}
