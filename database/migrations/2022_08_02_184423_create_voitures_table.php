<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id('id_voit');
            $table->String('Type');
            $table->integer('montant_jour');
            //$table->primary('id_voit');
          // $table->unsignedBigInteger('id_serv_loc');
           //$table->foreign('id_serv_loc')->references('id_serv_loc')->on('service_de_locations');
         // $table->foreignId('vice_de_locationser')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
}
