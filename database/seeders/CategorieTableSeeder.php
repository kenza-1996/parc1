<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
        ["nom"=> "Ecran LED"],
        ["nom"=> "Ecran LCD"],
        ["nom"=> "Laptop"],
        ["nom"=> "Switch"],
        ["nom"=> "Unité centrale"],
        ["nom"=> "Ecran Tube cathodique"],
        ["nom"=> "Onduleur"],
        ["nom"=> "Imprimante Multifonction" ],
        ["nom"=> "Scanner"],
        ["nom"=> "Modem"],
        ["nom"=> "imprimante ticket caisse"],
        ["nom"=> "Firewall"],
        ["nom"=> "Imprimante Matricielle"],
        ["nom"=> "Imprimante laser"],
        ["nom"=> "Imprimante laser couleur"],
        ["nom"=> "Data show"],
        ["nom"=> "Imprimante jet d'encre"],
        ["nom"=> "Imprimante code à barre"],
        ["nom"=> "Table tracente"],
       
        ["nom"=> "lecteur QR"],
        ]);
    }
}
