<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eleve;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EleveSeeder::class,
            DiplomeSeeder::class,
            FormateurSeeder::class,
            PromoSeeder::class,
        ]);
        
        Eleve::factory(15)->create();
    }
}
