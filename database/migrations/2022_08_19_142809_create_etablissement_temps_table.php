<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateEtablissementTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_temps', function (Blueprint $table) {
                $table->id();
                $table-> string('Nom')->nullable(true);
                $table-> string('local_eta');
                $table ->double('prix_max')->nullable(true);
                $table->double('prix_min')->nullable(true);
                $table->string('type_eta')->nullable(true);
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
        Schema::dropIfExists('etablissement_temps');
    }
}
