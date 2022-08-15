<?php

use App\Models\TypeVoiture;
use App\Models\ServiceDeLocation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Voiture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->String('Type');
            $table->integer('montant_jour');
            $table->foreignIdFor(TypeVoiture::class);
            $table->foreignIdFor(ServiceDeLocation::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
