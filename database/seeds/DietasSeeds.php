<?php

use App\Dieta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!(Dieta::where('nome', 'Dieta para emagrecimento')->get()->count())){
            DB::table('dietas')->insert([
                'nome' => "Dieta para emagrecimento",
            ]);
        }
        if(!(Dieta::where('nome', 'Dieta para aumentar massa muscular')->get()->count())) {
            DB::table('dietas')->insert([
                'nome' => "Dieta para aumentar massa muscular",
            ]);
        }
        if(!(Dieta::where('nome', 'Dieta aumento de massa muscular - Paciente com Alergia a lactose')->get()->count())) {
            DB::table('dietas')->insert([
                'nome' => "Dieta aumento de massa muscular - Paciente com Alergia a lactose",
            ]);
        }
    }
}
