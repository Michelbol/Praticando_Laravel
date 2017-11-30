<?php

use Illuminate\Database\Seeder;

class DietasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dietas')->insert([
            'nome' => "Dieta para emagrecimento",
        ]);

        DB::table('dietas')->insert([
            'nome' => "Dieta para aumentar massa muscular",
        ]);
    }
}
