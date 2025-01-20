<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Genre::create(['name' => 'Rock']);
        Genre::create(['name' => 'Pop']);
        Genre::create(['name' => 'Blues']);
        Genre::create(['name' => 'Jazz']);
        Genre::create(['name' => 'Classical']);
    }
}
