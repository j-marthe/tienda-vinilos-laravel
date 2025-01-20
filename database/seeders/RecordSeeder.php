<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RecordSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Instancia de Faker
        $genres = Genre::pluck('id')->toArray();

        // Crear 100 discos de vinilo
        Record::factory(100)->create()->each(function ($record) use ($faker, $genres) {
            // Asignar entre 1 y 3 géneros aleatorios a cada disco
            $record->genres()->attach(
                $faker->randomElements($genres, rand(1, 3))
            );
        });
    }
}
