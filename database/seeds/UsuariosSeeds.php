<?php

use Illuminate\Database\Seeder;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'name' => "Master",
            'email' => "admin",
            'password' => bcrypt("master"),
        ]);
        //factory(App\User::class, 50)->create();
    }
}
