<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMojModelsTable extends Migration
{
    /**
     * Run the migrations .
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moj_models', function (Blueprint $table) {
            $table->string('zklj');
            $table->string('Ime');
            $table->string('Prezime');
            $table->integer('Broj')->default(25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moj_models');
    }
}
