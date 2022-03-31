<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id');

            $table->foreignId('idCliente')->references("id")->on("clientes")->onDelete('cascade');

            $table->foreignId('idProduto')->references("id")->on("produtos")->onDelete('cascade');
            $table->string('city', 100);
            $table->integer('amount');
            $table->float('value', 12, 2)->default(0.00);
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
        Schema::dropIfExists('pedidos');

    }
}
