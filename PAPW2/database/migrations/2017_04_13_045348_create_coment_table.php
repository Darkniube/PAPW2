<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coment', function(Blueprint $table)
        {
            $table->increments('idcoment');
            $table->string('texto',300);
            $table->timestamps();
            $table->integer('iduser')->unsigned();
            $table->foreign('iduser')->references('iduser')->on('users');
            $table->integer('idreview')->unsigned();
            $table->foreign('idreview')->references('idreview')->on('review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('coment');
    }
}
