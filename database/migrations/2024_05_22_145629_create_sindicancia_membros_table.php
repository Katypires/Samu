<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSindicanciaMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico.sindicancia_membros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sindicancia_id')->nullable();
            $table->foreign('sindicancia_id')->references('id')->on('juridico.sindicancias')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('membro_id')->nullable();
            $table->foreign('membro_id')->references('id')->on('juridico.membros')->onUpdate('cascade')->onDelete('set null');
            
            $table->unsignedBigInteger('tipo_funcao_membro_id')->nullable();
            $table->foreign('tipo_funcao_membro_id')->references('id')->on('juridico.tipo_funcao_membros')->onUpdate('cascade')->onDelete('set null');

            $table->string('especie')->nullable();
            $table->string('numero_ato')->nullable();
            $table->date('data_ato')->nullable();
            $table->string('numero_diogrande')->nullable();
            $table->date('data_publicacao')->nullable();
            $table->string('numero_processo_sindicancia')->nullable();
            $table->date('data_publicacao_despacho_secretario')->nullable();
            $table->string('rubrica')->nullable();
            
            
            $table->unsignedBigInteger('user_id')->nullable()->index();
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
        Schema::dropIfExists('juridico.sindicancia_membros');
    }
}
