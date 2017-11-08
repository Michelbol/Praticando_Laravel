<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemDietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_dietas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dieta_id')->unsigned();
            $table->string('descricao', 1000)->nulablle();
            $table->time('horario')->nulablle();
            $table->enum('diasemana', ['segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo']);
            $table->timestamps();


            $table->foreign('dieta_id')->references('id')->on('dietas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_dietas');
    }
}
