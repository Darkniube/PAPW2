<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function(Blueprint $table)
        {
            $table->increments('idreview');
            $table->string('titulo', 100);
            $table->string('texto',1000);
            $table->string('imagen',1000);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('iduser')->unsigned();
            $table->foreign('iduser')->references('iduser')->on('users');
            $table->integer('idgenre')->unsigned();
            $table->foreign('idgenre')->references('idgenre')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('review');
    }
}
