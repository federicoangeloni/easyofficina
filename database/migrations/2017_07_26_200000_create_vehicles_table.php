<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('plate');
            $table->string('chassis');
            $table->string('enginecode');
            $table->string('kilometers');
            $table->date('matriculation');

            $table->integer('ownerid')->unsigned();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('ownerid')->references('id')->on('customers')->onDelete('cascade');


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
