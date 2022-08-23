<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieuxes', function (Blueprint $table) {
            $table->id();
            $table-> string('Nom');
            $table-> string('local_eta');
            $table ->string('Desc_Lieux');
            $table-> string('images');
            $table->string('region');
            $table->integer('Prix');
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('lieuxes');
    }
}
