<?php

use Illuminate\Database\Seeder;

class AlunosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        factory(App\Aluno::class, 10)->create();
    }
}
