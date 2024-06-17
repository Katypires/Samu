<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOitivaPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico.oitiva_pessoas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oitiva_id')->nullable();
            $table->foreign('oitiva_id')->references('id')->on('juridico.oitivas')->onUpdate('cascade')->onDelete('set null');
            
            $table->unsignedBigInteger('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('juridico.pessoas')->onUpdate('cascade')->onDelete('set null');
            
            $table->unsignedBigInteger('tipo_funcao_pessoa_id')->nullable();
            $table->foreign('tipo_funcao_pessoa_id')->references('id')->on('juridico.tipo_funcao_pessoas')->onUpdate('cascade')->onDelete('set null');
            
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
        Schema::dropIfExists('juridico.oitiva_pessoas');
    }
}
