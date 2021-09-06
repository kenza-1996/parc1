<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table("structures")->insert([
                ["nom_struct"=>"DGSI"],
                ["nom_struct"=>"OTE"],
                ["nom_struct"=>"DEET"],
                ["nom_struct"=>"DRH"],
                ["nom_struct"=>"DRC"],
                ["nom_struct"=>"DAM"],
                ["nom_struct"=>"DFC"],
                ["nom_struct"=>"DTG"],
                ["nom_struct"=>"SAG"],
                ["nom_struct"=>"DPEG"]
               
            ]);
    }
}
