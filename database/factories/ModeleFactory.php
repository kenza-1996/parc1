<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Modeles;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModeleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modeles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" =>array_rand([ 
                "P196HQV",
                "Travelmate 7720",
                "OS6450-P48 cuivre",
                "AOC",
                "RS1200",
                "800",
                "10KVA",
                "LIDE110" ,
                "ADSL",
                "600av",
                "Alphapower",
                "9009S",
                "core i3",
                "duel core e5500",
                "M2400HL",
                "E2214HB",
                "N3024F Optique",
                "Optiplex 9020",
                "7029-6E3",
                "Eserie NV",
                "5E1100",
                "EX2200",
                "Eserie NV",
               
                "9130",
                "ATLAS 1250",
                "TM-T88V",
                "Display B24_8TE-LED",
                "L22T-6",
                "ESPRIMO P957 E85",
                "DL3750+",
                "Celius M730n",
                "L22T-6",
                "LIFEBOOK",
                "Esprimo P758 E94+N",
                "Display B22-8TS LCD",
                "Esprimo P3520",
                "Display DY22-8T LCD",
                "LA36N",
                "dx 7300",
                "L1706",
                "elite 8300",
                "W1972a",
                "1300",
                "W1972a",
                "P1005",
                "P1102",
                "Prodisplay P223-21,5",
                "dx 2200",
                "3600",
                "2500cm",
                "MP3222",
                "Designjet 800",
                "Designjet 450",
                "Pro Desk 600G4",
                "Prodesk 600G4",
                "X1 1000",
                "1250 IEC",
                "RT2000",
                "FS1016MFP",
                "FS1025MFP",
                "FS1118MFP",
                "MS 8520",
                "ECOSYS M2030 MFD DN",
                "UPS Draker dk",
                "E340",
                "2391",
                "2400 series",
                "MS510dn",
                "MX310DN",
                "E260dn",
                "MX310",
                "MS310",
                "X463",
                "2590 series",
                "MX710de",
                "X740",
                "MX510",
                "MS415DN",
                "2591 series",
                "C748de",
                "CX860 de couleur A4",
                "B930n",
                "B411dn",
                "B6250",
                "KX-MB1900",
                "ML3310ND",
                "CLP620dn",
                "ML3710ND",
                "CLP775nd",
                "C600",
                "phaser 3330",
                "Copy center",
                "versalink B605",
                "3425 Phaser",
                "B400",
                "Phaser 3610",
                "portable DS 2200",
                "GX420T",
            ]),
    
        ];
        }
}
