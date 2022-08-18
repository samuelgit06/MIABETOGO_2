<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

      $admin =  User::create([
            'name'=>'admin',
            'email'=>'administrateur@admin.com',
            'passord'=>Hash::make('password')
        ]);

        $auteur = User::create([
            'name'=>'auterur',
            'email'=>'auteur@auteur.com',
            'passord'=>Hash::make('password')
        ]);

        $utilisateur = User::create([
            'name'=>'utilisateur',
            'email'=>'utilisateur@utilisateur.com',
            'passord'=>Hash::make('password')
        ]);

        $adminRole = Role::where('name','admin')->first();
        $auteurRole= Role::where('name','auteur')->first();
        $utilisateurRole= Role::where('name','utilisateur')->first();

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);

    }
}
