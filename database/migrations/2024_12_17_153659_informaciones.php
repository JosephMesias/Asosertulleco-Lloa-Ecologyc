<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaciones', function(Blueprint $table){
            $table->id();
            $table->text('logo');
            $table->string('correo');
            $table->string('telefono');
            $table->text('direccion');
            $table->enum('status',['ACTIVE','DESACTIVATE'])->default('ACTIVE');
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
        Schema::dropIfExists('informaciones');
    }
}
