<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLouersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('louers', function (Blueprint $table) {
            $table->id('id_loue');
            //$table->unsignedBigInteger('id_voit');
           // $table->unsignedBigInteger('id_client');
          // $table->foreign('id_client')->references('id_client')->on('client');
        // $table->foreign('id_voit')->references('id_voit')->on('voiture');
           //$table->foreignId('voiture')->constrained();
          // $table->foreignId('client')->constrained();
//$table->primary('id_loue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('louers');
    }
}
