<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centres', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('nom');
            $table->string('description')->nullable();
            $table->unsignedInteger('kartier_id');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();

            $table->foreign('kartier_id')->references('id')->on('kartiers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centres');
    }
}
