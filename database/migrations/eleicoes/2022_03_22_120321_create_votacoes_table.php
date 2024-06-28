<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleicoes.votacoes', function (Blueprint $table) {
            $table->id();

            $table->integer('eleicao_id');
            $table->foreign('eleicao_id')->references('id')->on('eleicoes.eleicoes')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('eleitor_id');
            $table->foreign('eleitor_id')->references('id')->on('eleicoes.eleitores')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('candidato_id');
            $table->foreign('candidato_id')->references('id')->on('eleicoes.candidatos')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('comprovante_id');
            $table->foreign('comprovante_id')->references('id')->on('eleicoes.comprovantes')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('quantidade')->default(1);

            $table->string('key')->unique();

            $table->boolean('status')->default(1);

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
        Schema::dropIfExists('eleicoes.votacoes');
    }
}
