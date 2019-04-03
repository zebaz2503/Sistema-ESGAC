<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->string('apellido');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('rango'); 
            $table->integer('rol');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('apellido');
            $table->dropColumn('cedula');
            $table->dropColumn('telefono');
            $table->dropColumn('rango'); 
            $table->dropColumn('rol');

        });

    }
}
