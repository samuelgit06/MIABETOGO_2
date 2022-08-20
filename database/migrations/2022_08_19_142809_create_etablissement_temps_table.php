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
                $table-> string('Nom')->Nullable(true);
                $table-> string('local_eta');
                $table ->double('prix_max');
                $table->double('prix_min');
                $table->string('type_eta');
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
