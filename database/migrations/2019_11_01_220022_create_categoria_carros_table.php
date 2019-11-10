<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_carros', function (Blueprint $table) {
            $table->uuid('id_categoria_carro');
            $table->primary('id_categoria_carro');
            $table->uuid('categoria_id');
            $table->uuid('carro_id');
            $table->timestamps();
        });
          Schema::table('categoria_carros', function (Blueprint $table) {
            $table->foreign('categoria_id')
            ->references('id_categoria')
            ->on('categorias')
            ->onDelete('cascade');
        });
        Schema::table('categoria_carros', function (Blueprint $table) {
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
        Schema::dropIfExists('categoria_carros');
    }
}
