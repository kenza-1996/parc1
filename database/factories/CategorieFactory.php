<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" =>array_rand([ 
            "Ecran LED",
            "Ecran LCD",
            "Laptop",
            "Switch",
            "Unité centrale",
            "Ecran Tube cathodique",
            "Onduleur",
            "Imprimante Multifonction" ,
            "Scanner",
            "Modem",
            "imprimante ticket caisse",
            "Firewall",
            "Imprimante Matricielle",
            "Imprimante laser",
            "Imprimante laser couleur",
            "Data show",
            "Imprimante jet d'encre",
            "Imprimante code à barre",
            "Table tracente",
           
            "lecteur QR"]),
           
            ];
    }
}
