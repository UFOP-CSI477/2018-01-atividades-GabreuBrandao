<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function(Blueprint $table){
            $table->increments('id');//criando o campo id do tipo increment

            $table->string('nome', 100);//criando o campo nome do tipo string com o maior tamanho do bd utilizado, caso esteja sem o tamanho declarado
            $table->string('sigla', 2);

            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
        
    }
}
