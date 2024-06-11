<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntario.instituicoes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tipo_atividade_id')->nullable();
            $table->foreign('tipo_atividade_id')->references('id')->on('voluntario.tipo_atividades')->onUpdate('cascade')->onDelete('set null');
            
            $table->unsignedBigInteger('tipo_seguimento_id')->nullable();
            $table->foreign('tipo_seguimento_id')->references('id')->on('voluntario.tipo_seguimentos')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('tipo_regiao_urbana_id')->nullable();
            $table->foreign('tipo_regiao_urbana_id')->references('id')->on('voluntario.tipo_regiao_urbanas')->onUpdate('cascade')->onDelete('set null');

            $table->string('nome')->nullable();
            $table->text('descricao')->nullable();
            $table->string('nome_fantasia')->nullable();
            $table->string('razao_social')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('telefone')->nullable();
            $table->string('fone_contato')->nullable();
            $table->string('email')->nullable();
            $table->string('sigla')->nullable();
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('numero')->nullable();
            $table->string('uf')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('complemento')->nullable();
            $table->string('classificacao')->nullable();
            $table->string('risco')->nullable();
            $table->string('prioridade')->nullable();
            $table->string('complexidade')->nullable();
            $table->string('situacao')->nullable();
            $table->boolean('cv')->default(false);
            $table->boolean('pe')->default(false);
            $table->string('url')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('voluntario.instituicoes');
    }
}
