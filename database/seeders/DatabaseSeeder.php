<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Sayuran'
        ]);

        Category::create([
            'name' => 'Daging'
        ]);

        Category::create([
            'name' => 'Rempah'
        ]);

        Category::create([
            'name' => 'Pelengkap'
        ]);
    }
}