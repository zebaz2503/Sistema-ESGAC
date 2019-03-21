<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canes', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('foto_can');
            $table->string('nombre_can');
            $table->string('raza');
            $table->string('estado');
            $table->string('edad');
            $table->string('peso');
            $table->string('condicion_cor');
            $table->string('rer');
            $table->string('red');
            $table->string('racion');
            $table->string('sexo');
            $table->string('tipo_alimento');
            $table->string('variables');
                        
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
        Schema::dropIfExists('canes');
    }
}
