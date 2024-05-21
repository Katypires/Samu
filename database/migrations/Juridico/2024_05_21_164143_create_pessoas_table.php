<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juridico.pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('cpf') ->unique()->nullable();
            $table->string('cnpj') ->unique()->nullable();
            $table->string('oab')->nullable();
            
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
        Schema::dropIfExists('juridico.pessoas');
    }
}
