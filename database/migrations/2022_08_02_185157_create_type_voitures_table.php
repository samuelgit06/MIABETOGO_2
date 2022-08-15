<?php

use App\Models\TypeVoiture;
use App\Models\voiture;
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
            $table->id();
            $table->string('nom_type');
            $table->string('marques');
           
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
