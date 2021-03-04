<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNetflixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netflixes', function (Blueprint $table) {
            $table->increments('idPaquete');
            $table->timestamps();
            $table->integer('idPaquete');
            $table->string('nombre');
            $table->string('costo');
            $table->string('descrpcion');
            $table->string('tiempo');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('netflixes');
    }
}
