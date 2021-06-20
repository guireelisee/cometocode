<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocieteCentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societe_centres', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->unsignedInteger('centre_id');
            $table->unsignedInteger('societe_id');
            $table->timestamps();

            $table->foreign('centre_id')->references('id')->on('centres')->onDelete('cascade');
            $table->foreign('societe_id')->references('id')->on('societes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societe_centres');
    }
}
