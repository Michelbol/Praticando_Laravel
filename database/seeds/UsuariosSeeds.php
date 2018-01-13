<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        if(!(User::where('name', 'Master')->get()->count())) {
            DB::table('users')->insert([
                'name' => "Master",
                'email' => "admin",
                'password' => bcrypt("master"),
            ]);
        }
        if(!(User::where('name', 'Evaldo')->get()->count())) {
            DB::table('users')->insert([
                'name' => "Evaldo",
                'email' => "evaldo",
                'password' => bcrypt("123456"),
            ]);
        }
        if(!(User::where('name', 'Luis')->get()->count())) {
            DB::table('users')->insert([
                'name' => "Luis",
                'email' => "luis",
                'password' => bcrypt("123456"),
            ]);
        }
        if(!(User::where('name', 'Lucas')->get()->count())) {
            DB::table('users')->insert([
                'name' => "Lucas",
                'email' => "lucas",
                'password' => bcrypt("123456"),
            ]);
        }
        //factory(App\User::class, 50)->create();
    }
}
