<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('serviceName');
            $table->string('serviceIcon');
            $table->string('basic');
            $table->string('basicPrice');
            $table->string('simple');
            $table->string('simplePrice');
            $table->string('medium');
            $table->string('mediumPrice');
            $table->string('complex');
            $table->string('complexPrice');
            $table->string('superComplex');
            $table->string('superComplexPrice');
            $table->string('multiComplex');
            $table->string('multiComplexPrice');
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
        Schema::dropIfExists('prices');
    }
}
