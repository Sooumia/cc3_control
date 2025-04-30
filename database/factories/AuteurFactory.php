<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_auteur' => $this->faker->lastName, 
            'prenom_auteur' => $this->faker->firstName, 
            'datenaissance_auteur' => $this->faker->date, 
            'pays_auteur' => $this->faker->country
        ];
    }
}
