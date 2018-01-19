<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Serviceusage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceusages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('service_id')->nullable();
            $table->string('service_type')->nullable();
            $table->string('serviceid')->nullable();
            $table->string('jobid')->nullable();
            $table->string('description')->nullable();
            $table->integer('quantity')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceusages');
    }
}
