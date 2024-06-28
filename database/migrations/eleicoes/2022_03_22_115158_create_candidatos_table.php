<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleicoes.candidatos', function (Blueprint $table) {
            $table->id();

            $table->integer('eleicao_id');
            $table->foreign('eleicao_id')->references('id')->on('eleicoes.eleicoes')->onUpdate('cascade')->onDelete('set null');

            $table->string('nome')->nullable();
            $table->string('cpf')->unique();
            $table->string('cargo')->nullable();

            $table->boolean('status')->default(true);


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
        Schema::dropIfExists('eleicoes.candidatos');
    }
}
