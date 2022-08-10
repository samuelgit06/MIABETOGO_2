<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('isadmin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('etablissements', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('Nom');
            $table-> text('Desc_eta');
            $table-> string('local_eta' ,50);
            $table-> string('mail_eta',50);
            $table-> string('lien_web_eta',100);
            $table -> string('num_etablissment');
            $table-> string('images');
            $table-> string('Note_eta',50);
            $table-> integer('Montant_par_jour');
            $table -> integer('prix_max');
            $table->integer('prix_min');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('etablissements');
    }
}
