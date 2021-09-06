<?php

namespace Database\Factories;

use App\Models\Marque;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Marque::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" =>array_rand([ 
                 "ACER",
                 "Alcatel",
                 "AOC",
                 "APC",
                 "Brother",
                 "Canon",
                 "CISCO",
                 "Compaq" ,
                 "Condor",
                 "DELL",
                 "Desk power",
                 "E server",
                 "EATON",
                 "ECM",
                 "EPSON",
                 "ELIX",
                 "FORTINET",
                 "Fujitsu",
                 "Genicom",
               
                 "HP",
                 "INFOSEC",
                 "Kyocera",
                 "le grand",
                 "LEXMARK",
                 "Mercury",
                 "NITRAM",
                 "OKI",
                 "SAMSUNG",
                 "Panasonic",
                 "Versalink",
                 "XEROX",
                 "ZEBRA",
            ])
    
        ];
        }
}
