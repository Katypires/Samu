<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprovantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleicoes.comprovantes', function (Blueprint $table) {
            $table->id();

            $table->integer('eleicao_id');
            $table->foreign('eleicao_id')->references('id')->on('eleicoes.eleicoes')->onUpdate('cascade')->onDelete('set null');

            $table->integer('eleitor_id');
            $table->foreign('eleitor_id')->references('id')->on('eleicoes.eleitores')->onUpdate('cascade')->onDelete('set null');

            $table->string('key')->unique();

            $table->string('log')->nullable();

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
        Schema::dropIfExists('eleicoes.comprovantes');
    }
}
