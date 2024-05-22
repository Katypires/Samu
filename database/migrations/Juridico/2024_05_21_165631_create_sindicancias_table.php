<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSindicanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico.sindicancias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_situacao_id')->nullable();
            $table->foreign('tipo_situacao_id')->references('id')->on('juridico.tipo_situacaos')->onUpdate('cascade')->onDelete('set null');

            $table->string('numero_processo')->nullable();
            $table->string('especie')->nullable();
            $table->string('numero_resolucao')->nullable();
            $table->string('numero_diogrande')->nullable();
            $table->date('data_abertura')->nullable();
            $table->date('data_instauracao')->nullable();
            $table->text('assunto_fato')->nullable();
            $table->string('numero_documento')->nullable();
            $table->text('conclusao_decisao')->nullable();
            $table->date('data_finalizacao')->nullable();
            
            
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
        Schema::dropIfExists('juridico.sindicancias');
    }
}
