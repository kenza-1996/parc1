<?php

namespace Database\Factories;

use App\Models\Structure;
use Illuminate\Database\Eloquent\Factories\Factory;

class StructureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Structure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_struct" =>array_rand([ 
            "DGSI",
           "OTE",
           "DEET",
           "DRH",
           "DRC",
           "DAM",
           "DFC",
           "DTG",
           "SAG",
           "DPEG"
            ])
        ];
    }
}
