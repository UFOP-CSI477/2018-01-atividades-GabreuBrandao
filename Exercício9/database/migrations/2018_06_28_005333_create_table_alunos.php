<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome', 100);
            $table->string('cep', 50);

            $table->integer('cidade_id')->unsigned();


            $table->timestamps();

            //Relação aluno x cidade
            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
