<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCanAnomalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anomaliases', function(Blueprint $table){
            $table->integer('id_can');
            $table->integer('id_usuario');
      
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
        Schema::table('anomaliases', function(Blueprint $table){
            $table->dropColumn('id_can');
            $table->dropColumn('id_usuario');
      
        });
    }
}
