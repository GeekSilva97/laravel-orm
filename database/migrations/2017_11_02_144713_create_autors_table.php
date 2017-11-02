<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->increments('id_autor');
            $table->integer('id_processo')->unsigned();
            $table->integer('id_pessoa')->unsigned();
            $table->foreign('id_processo')->references('id_processo')->on('processo')->onDelete('cascade');
            $table->foreign('id_pessoa')->references('id_pessoa')->on('pessoa')->onDelete('cascade');
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
        Schema::dropIfExists('autors');
    }
}
