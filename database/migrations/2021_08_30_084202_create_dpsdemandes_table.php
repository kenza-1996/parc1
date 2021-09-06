<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpsdemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpsdemandes', function (Blueprint $table) {
            $table->id();
            $table->string("num_dps");
            
            $table->dateTime("date");
            $table->foreignId("structure_id")->constrained();
           
            $table->foreignId("materiel_id")->constrained();
            
            
            $table->boolean("action")->default(0)->nullable();
            
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
        Schema::table('dpsdemandes', function (Blueprint $table) {
            $table->dropForeign("materiel_id","structure_id");
        });
        Schema::dropIfExists('dpsdemandes');
    }
}
