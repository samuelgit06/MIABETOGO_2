<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_voitures', function (Blueprint $table) {
            $table->id('id_type_voiture');
            $table->string('nom_type');
            $table->string('marques');
          //  $table->foreignId('voiture')->constrained();
//$table->primary('id_type_voiture');
//$table->unsignedBigInteger('id_voit');
//$table->foreign('id_voit')->references('id_voiture')->on('voiture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_voitures');
    }
}
