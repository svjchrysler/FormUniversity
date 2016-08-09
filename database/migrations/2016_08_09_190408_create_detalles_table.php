<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->integer('date_id')->unsigned();
            $table->integer('time_id')->unsigned();

            $table->foreign('date_id')->references('id')->on('date__works')->onDelete('cascade');
            $table->foreign('time_id')->references('id')->on('time__works')->onDelete('cascade');

            $table->integer('cantidad');

            $table->primary(['date_id', 'time_id']);
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
        Schema::drop('detalles');
    }
}
