<?php

use App\Exercicio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciciosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        if(!Exercicio::where('nome', 'Supino Reto')->get()->count()) {
            DB::table('exercicios')->insert([
                'nome' => "Supino Reto",
                'musculo' => "Peitoral maior",
            ]);
        }
        if(!Exercicio::where('nome', 'Leg Press')->get()->count()) {
            DB::table('exercicios')->insert([
                'nome' => "Leg Press",
                'musculo' => "Quadríceps",
            ]);
        }
        if(!Exercicio::where('nome', 'Rosca Direta')->get()->count()) {
            DB::table('exercicios')->insert([
                'nome' => "Rosca Direta",
                'musculo' => "Bíceps",
            ]);
        }
    }
}
