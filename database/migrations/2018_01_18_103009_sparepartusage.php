<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SparePartUsage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparepartusages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('sparepartid')->nullable();
            $table->integer('warehouseid')->nullable();
            $table->integer('jobid')->nullable();
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
        Schema::dropIfExists('sparepartusages');
    }
}
