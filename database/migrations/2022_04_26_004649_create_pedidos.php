<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('status',2);
            $table->date('dataped');
            $table->date('dataent');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('transportadora_id');
            $table->foreign('cliente_id')->references('id')->on('users');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('transportadora_id')->references('id')->on('transportadoras');

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
};
