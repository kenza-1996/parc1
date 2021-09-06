<?php

namespace Database\Factories;

use App\Models\Materiel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterielFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materiel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_serie' => $this->faker->bothify('????######'),
            'code_barre' => $this->faker->bothify('##########'),
            'etat'=>array_rand(['neuf', 'en cour de reparation','en panne','repare'],1),
            'affectation'=>array_rand(['non affecte','affecte'] ,1)
        ];
    }
}
