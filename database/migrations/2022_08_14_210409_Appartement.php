<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appartement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('Appartement', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
              //  $table->primary('id_maison');
            });
        }
    }
    public function down()
    {
        Schema::dropIfExists('Appartement');
    }
}
