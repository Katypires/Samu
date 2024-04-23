<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacaoIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semraiva.notificacao_individuais', function (Blueprint $table){
            $table->id();

            // $table->unsignedBigInteger('ficha_id')->nullable();
            // $table->foreign('ficha_id')->references('id')->on('semraiva.fichas')->onUpdate('cascade')->onDelete('set null');

            // $table->unsignedBigInteger('paciente_id')->nullable();
            // $table->foreign('paciente_id')->references('id')->on('semraiva.pacientes')->onUpdate('cascade')->onDelete('set null');

            $table->string('nome')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->integer('idade')->nullable();
            $table->string('sexo', 1)->nullable();
            $table->integer('gestante')->nullable();
            $table->integer('raca_cor')->nullable();
            $table->integer('escolaridade')->nullable();
            $table->integer('numero_cartao_sus')->nullable();
            $table->string('nome_mae')->nullable();

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
        Schema::dropIfExists('semraiva.notificacao_individuais');
    }
}
