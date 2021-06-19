<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartiers', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('nom');
            $table->unsignedInteger('arrondissement_id');
            $table->timestamps();

            $table->foreign('arrondissement_id')->references('id')->on('arrondissements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartiers');
    }
}
