<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('fecha');
            $table->integer('dias');
            $table->boolean('visible');
            $table->unsignedBigInteger('auto_id')->nullable();
            $table->foreign('auto_id')->references('id')->on('auto');   
            $table->unsignedBigInteger('cliente_id')->nullable();;
            $table->foreign('cliente_id')->references('id')->on('cliente'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
