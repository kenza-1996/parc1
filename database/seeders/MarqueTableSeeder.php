<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("marques")->insert([
            ["nom"=> "ACER"],
            ["nom"=> "Alcatel"],
            ["nom"=> "AOC"],
            ["nom"=> "APC"],
            ["nom"=> "Brother"],
            ["nom"=> "Canon"],
            ["nom"=> "CISCO"],
            ["nom"=> "Compaq" ],
            ["nom"=> "Condor"],
            ["nom"=> "DELL"],
            ["nom"=> "Desk power"],
            ["nom"=> "E server"],
            ["nom"=> "EATON"],
            ["nom"=> "ECM"],
            ["nom"=> "EPSON"],
            ["nom"=> "ELIX"],
            ["nom"=> "FORTINET"],
            ["nom"=> "Fujitsu"],
            ["nom"=> "Genicom"],
           
            ["nom"=> "HP"],
            ["nom"=> "INFOSEC"],
            ["nom"=> "Kyocera"],
            ["nom"=> "le grand"],
            ["nom"=> "LEXMARK"],
            ["nom"=> "Mercury"],
            ["nom"=> "NITRAM"],
            ["nom"=> "OKI"],
            ["nom"=> "SAMSUNG"],
            ["nom"=> "Panasonic"],
            ["nom"=> "Versalink"],
            ["nom"=> "XEROX"],
            ["nom"=> "ZEBRA"],
            ]);
    
    }
}
