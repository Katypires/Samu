<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntario.colaboradors', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('instituicao_id')->nullable();
            // $table->foreign('instituicao_id')->references('id')->on('voluntario.instituicao')->onUpdate('cascade')->onDelete('set null');

            $table->string('nome')->nullable();
            $table->string('apelido')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cargo')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->date('data_inicial')->nullable();
            $table->date('data_final')->nullable();
            $table->text('nota')->nullable();
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
        Schema::dropIfExists('voluntario.colaboradors');
    }
}
