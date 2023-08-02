<?php

namespace Database\Factories;

//Hacer texto amigables
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Egresado>
 */
class EgresadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'     => 1,
            'nombre'      => $nombre = implode(' ', $this->faker->words(3)),
            'slug'        => Str::slug($nombre),
            'foto'        => $this->faker->imageUrl(150, 150),
            'experiencia' => $this->faker->randomDigit(),
            'profesion'   => $this->faker->sentence(),
            'universidad' => $this->faker->sentence(),
            'red1'        => $this->faker->url(),
            'red2'        => $this->faker->url()

        ];
    }
}
