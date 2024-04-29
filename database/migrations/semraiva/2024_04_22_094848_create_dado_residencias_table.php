<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadoResidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semraiva.dado_residencias', function (Blueprint $table) {
            $table->id();

            $table->string('uf')->nullable();
            $table->string('municipio_residencia')->nullable();
            $table->integer('codigo_ibge')->nullable();
            $table->string('distrito')->nullable();
            $table->string('bairro')->nullable();
            $table->string('logradouro')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('geo_campo1')->nullable();
            $table->string('geo_campo2')->nullable();
            $table->string('ponto_referencia')->nullable();
            $table->integer('cep')->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('zona')->nullable();
            $table->string('pais')->nullable();
            
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
        Schema::dropIfExists('semraiva.dado_residencias'); 
    }
}