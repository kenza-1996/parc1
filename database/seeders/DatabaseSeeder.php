<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      

       
        User::factory(4)->create();
      

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
       

        $this->call(CategorieTableSeeder::class);
        $this->call(ModeleTableSeeder::class);
        $this->call(MarqueTableSeeder::class);
        $this->call(StructureTableSeeder::class);
       
       

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);


    }
}
