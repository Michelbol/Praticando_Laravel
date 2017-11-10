<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicioTreinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicio_treino', function(Blueprint $table){
            $table->increments('id');
            $table->integer('treino_id')->unsigned();
            $table->integer('exercicio_id')->unsigned();
            $table->timestamps();

            $table->foreign('treino_id')->references('id')->on('treinos')->onDelete('cascade');
            $table->foreign('exercicio_id')->references('id')->on('exercicios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicio_treino');
    }
}
