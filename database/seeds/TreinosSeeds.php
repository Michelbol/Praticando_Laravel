<?php

use Illuminate\Database\Seeder;

class TreinosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Treino::class, 15)->create();
    }
}
