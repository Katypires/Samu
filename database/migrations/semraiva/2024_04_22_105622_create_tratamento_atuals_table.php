<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamentoAtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semraiva.tratamento_atuais', function (Blueprint $table) {
            $table->id();

            $table->integer('tratamento_indicado')->nullable();
            $table->integer('outro')->nullable();
            $table->string('outro_vacina')->nullable();
            $table->integer('num_lote')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->integer('datas_aplicacao_vacina')->nullable();
            $table->date('dose_data_1a')->nullable();
            $table->date('dose_data_2a')->nullable();
            $table->date('dose_data_3a')->nullable();
            $table->date('dose_data_4a')->nullable();
            $table->date('dose_data_5a')->nullable();
            $table->integer('condicao_final_animal')->nullable();
            $table->integer('interrupcao_tratamento')->nullable();
            $table->integer('motivo_interrupcao')->nullable();
            $table->integer('procura_unidade_saude')->nullable();
            $table->integer('evento_adverso_vacina')->nullable();
            $table->integer('indicacao_soro_rabico')->nullable();
            $table->string('peso_paciente')->nullable();
            $table->string('qtd_soro_aplicada_ml')->nullable();
            $table->integer('qtd_soro_aplicada')->nullable();
            $table->string('infiltracao_soro_local')->nullable();
            $table->integer('infiltracao_soro_total')->nullable();
            $table->integer('infiltracao_soro_parcial')->nullable();
            $table->integer('laboratorio_soro_rabico')->nullable();
            $table->string('outro_laboratorio_soro_rabico')->nullable();
            $table->integer('num_partida')->nullable();
            $table->integer('evento_adverso_soro_rabico')->nullable();
            $table->date('data_encerramento_caso')->nullable();

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
        Schema::dropIfExists('semraiva.tratamento_atuais');
    }
}
