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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->bigInteger('autorId')->unsigned();
            $table->string('desc');
            $table->string('url');
            $table->float('preco');
            $table->bigInteger('createdBy')->unsigned();
            $table->foreign('autorId')->references('id')->on('autores');
            $table->foreign('createdBy')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
