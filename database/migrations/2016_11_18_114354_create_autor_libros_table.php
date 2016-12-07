<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_libro', function (Blueprint $table) {

            $table->integer('codAutor')->unsgined()->nullable();
            $table->foreign('cod_a')->references('cod_a')->on('autor')->onDelete('cascade');

            $table->integer('codLibro')->unsigned()->nullable();
            $table->foreign('cod_l')->references('cod_l')->on('libro')->onDelete('cascade');

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
        Schema::dropIfExists('autor_libros');
    }
}
