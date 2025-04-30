<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Livre;
use App\Models\Auteur;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Auteur::factory(10)->create();
        Categorie::factory(5)->create();
        Livre::factory(10)->create();
        Admin::factory()->create();

    }
}
