<?php

use App\Models\TypeVoiture;
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
            $table->id('id');
            $table->string('nom_type');
            $table->string('marques');
        });

        Schema::create('voitures', function (Blueprint $table) {
            $table->id('id_voit');
            $table->String('Type');
            $table->integer('montant_jour');
           $table->foreignIdFor(TypeVoiture::class);
           
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
