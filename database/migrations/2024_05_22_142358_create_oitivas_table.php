<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOitivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico.oitivas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sindicancia_id')->nullable();
            $table->foreign('sindicancia_id')->references('id')->on('juridico.sindicancias')->onUpdate('cascade')->onDelete('set null');
            
            $table->unsignedBigInteger('pessoa_id')->nullable();
            $table->foreign('pessoa_id')->references('id')->on('juridico.pessoas')->onUpdate('cascade')->onDelete('set null');
            
            $table->date('data_oitiva')->nullable();
            $table->string('local')->nullable();
            $table->text('relatorio')->nullable();
            
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
        Schema::dropIfExists('juridico.oitivas');
    }
}
