<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->string("num_serie");
            $table->string("code_barre");
           
            $table->char("etat")->array_rand('neuf', 'en cour de reparation', 'en panne', 'repare');
            $table->char("affectation")->array_rand('non affecte','affect');
            $table->foreignId("lot_id")->constrained();
            
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiels', function (Blueprint $table) {
            $table->dropForeign("lot_id");
        });
        Schema::dropIfExists('materiels');
    }
}
