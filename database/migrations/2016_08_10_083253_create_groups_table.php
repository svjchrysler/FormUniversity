<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('universidad');
            $table->text('file1');
            $table->string('representante');
            $table->string('rtelefono');
            $table->string('remail');
            $table->text('file2');
            $table->string('nombreone');
            $table->string('telefonoone');
            $table->string('emailone');
            $table->text('file3');
            $table->string('nombretwo');
            $table->string('telefonotwo');
            $table->string('emailtwo');
            $table->text('file4');
            $table->string('nombrethree');
            $table->string('telefonothree');
            $table->string('emailthree');
            $table->text('file5');
            $table->string('nombrefour');
            $table->string('telefonofour');
            $table->string('emailfour');
            $table->text('file6');
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
        Schema::drop('groups');
    }
}
