<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposPDF extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('alimentacions', function(Blueprint $table){
            $table->integer('id_can');
            $table->integer('id_usuario');
            $table->string('nombre_can');
            $table->string('racion');
            $table->string('name');
      
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
        Schema::table('alimentacions', function(Blueprint $table){
            $table->dropColumn('id_can');
            $table->dropColumn('id_usuario');
            $table->string('nombre_can');
            $table->string('racion');
            $table->string('name');
      
        });
    }
}
