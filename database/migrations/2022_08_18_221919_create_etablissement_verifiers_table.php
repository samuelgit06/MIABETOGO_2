<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtablissementVerifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_verifiers', function (Blueprint $table) {
            $table->id();
            $table-> string('Nom')->nullable(true);
            $table-> text('Desc_eta');
            $table-> string('local_eta' ,50);
            $table-> string('mail_eta',50)->nullable(true);
            $table-> string('lien_web_eta',100)->nullable(true);
            $table -> integer('num_etablissment');
            $table-> string('images');
            $table ->double('prix_max');
            $table->double('prix_min');
            $table->string('type_eta')->default('maison');
            $table->boolean('validate')->default(0);
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
        Schema::dropIfExists('etablissement_verifiers');
    }
}
