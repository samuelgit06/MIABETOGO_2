<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class Etablissement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table-> string('Nom');
            $table-> text('Desc_eta');
            $table-> string('local_eta' ,50);
            $table-> string('mail_eta',50)->nullable(true);;
            $table-> string('lien_web_eta',100)->nullable(true);
            $table -> integer('num_etablissment');
            $table-> string('images');
            $table ->double('prix_max');
            $table->double('prix_min');
            $table->string('typeetablissement')->nullable(true);
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
        //
    }
}
