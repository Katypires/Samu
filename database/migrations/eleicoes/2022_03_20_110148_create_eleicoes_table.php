<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleicoes.eleicoes', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->timestamp('data_inicial');
            $table->timestamp('data_final');
            $table->integer('candidatos')->default(1);
            $table->integer('min_votantes')->default(1);
            $table->integer('max_votantes')->default(1);

            // $table->unsignedBigInteger('user_id')->nullable()->index();
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
        Schema::dropIfExists('eleicoes.eleicoes');
    }
}
