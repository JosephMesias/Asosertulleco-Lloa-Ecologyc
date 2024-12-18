<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Misvis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misvis', function(Blueprint $table){
            $table->id();
            $table->text('texto');
            $table->text('url');
            $table->enum('status',['ACTIVE','DESACTIVATE'])->default('ACTIVE');
            /*$table->unsignedBigInteger('imagenes_id');
            $table->foreign('imagenes_id')->references('id')->on('imagenes');*/
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
        Schema::dropIfExists('misvis');
    }
}
