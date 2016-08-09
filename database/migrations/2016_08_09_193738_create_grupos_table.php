<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('date_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->foreign(['date_id', 'time_id'])->references(['date_id', 'time_id'])->on('detalles')->onDelete('cascade');
            $table->string('universidad');
            $table->string('representante');
            $table->string('rtelefono');
            $table->string('remail');
            $table->string('nombreone');
            $table->string('telefonoone');
            $table->string('emailone');
            $table->string('nombretwo');
            $table->string('telefonotwo');
            $table->string('emailtwo');
            $table->string('nombrethree');
            $table->string('telefonothree');
            $table->string('emailthree');
            $table->string('nombrefour');
            $table->string('telefonofour');
            $table->string('emailfour');
            $table->string('nombrefive');
            $table->string('telefonofive');
            $table->string('emailfive');
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
        Schema::drop('grupos');
    }
}
