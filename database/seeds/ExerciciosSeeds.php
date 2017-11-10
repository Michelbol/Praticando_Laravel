<?php

use Illuminate\Database\Seeder;

class ExerciciosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('exercicios')->insert([
            'nome' => "Supino Reto",
            'musculo' => "Peitoral maior",
        ]);

        DB::table('exercicios')->insert([
            'nome' => "Leg Press",
            'musculo' => "Quadríceps",
        ]);

        DB::table('exercicios')->insert([
            'nome' => "Rosca Direta",
            'musculo' => "Bíceps",
        ]);
    }
}
