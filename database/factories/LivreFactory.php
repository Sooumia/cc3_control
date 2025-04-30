<?php
namespace Database\Factories;

use App\Models\Auteur;
use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ISBN_Livre' => $this->faker->isbn13,
            'titre_Livre' => $this->faker->sentence, 
            'prix_Livre' => $this->faker->randomFloat(2, 10, 100), 
            'description_Livre' => $this->faker->text,
            'Auteur_id' => Auteur::factory()->create()->id, 
            'Categorie_id' => Categorie::factory()->create()->id, 
            'image_Livre' => 'images/Jordan_Peterson.jpg'
        ];
    }
}