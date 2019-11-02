<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAluguelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluguels', function (Blueprint $table) {
            $table->uuid('id_aluguel');
            $table->primary('id_aluguel');
            $table->uuid('usuario_id');
            $table->uuid('carro_id');
            $table->string('valor');
            $table->timestamps();
        });

        Schema::table('aluguels', function (Blueprint $table) {
            $table->foreign('carro_id')
            ->references('id_carro')
            ->on('carros')
            ->onDelete('cascade');
        });

        Schema::table('aluguels', function (Blueprint $table) {
            $table->foreign('usuario_id')
            ->references('id_usuario')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluguels');
    }
}
