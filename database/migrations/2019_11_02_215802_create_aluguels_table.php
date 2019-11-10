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
            $table->date('data_inicial');
            $table->date('data_final');
            $table->uuid('cliente_id');
            $table->uuid('categoria_carro_id');
            $table->uuid('carro_id');
            $table->string('valor');
            $table->timestamps();
        });

        Schema::table('aluguels', function (Blueprint $table) {
            $table->foreign('cliente_id')
            ->references('id_cliente')
            ->on('clientes')
            ->onDelete('cascade');
        });

        Schema::table('aluguels', function (Blueprint $table) {
            $table->foreign('categoria_carro_id')
            ->references('id_categoria_carro')
            ->on('categoria_carros')
            ->onDelete('cascade');
        });

         Schema::table('aluguels', function (Blueprint $table) {
            $table->foreign('carro_id')
            ->references('id_carro')
            ->on('carros')
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
