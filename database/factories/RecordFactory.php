<?php

namespace Database\Factories;

use App\Models\Record; // Importamos el Modelo de Record
use Illuminate\Database\Eloquent\Factories\Factory;


class RecordFactory extends Factory
{

    protected $model = Record::class;
     
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // Título del álbum
            'artist' => $this->faker->name,       // Artista
            'release_year' => $this->faker->year, // Año de lanzamiento
            'status' => $this->faker->randomElement(['nuevo', 'usado', 'colección']), // Estado disco
            'price' => $this->faker->randomFloat(2, 5, 100), // Precio random entre 5€ y 100€
            'cover_image' => $this->faker->imageUrl(400, 400, 'music', true, 'album'), // Imagen
        ];
    }
}
