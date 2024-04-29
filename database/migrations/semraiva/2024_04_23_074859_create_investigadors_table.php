<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semraiva.investigadores', function (Blueprint $table) {
            $table->id();

            $table->string('municipio_unidade_saude')->nullable();
            $table->integer('cod_unidade_saude')->nullable();
            $table->string('nome_investigador')->nullable();
            $table->string('funcao_investigador')->nullable();
            $table->string('assinatura_investigador')->nullable();

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
        Schema::dropIfExists('semraiva.investigadores');
    }
}
