<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobdate');
            //$table->json('jobRows');
            $table->longText('description')->nullable();
            $table->string('amount')->nullable();
            $table->boolean('completed')->default(false);
            $table->boolean('payed')->default(false);


            $table->integer('vehicleid')->unsigned();
            //$table->integer('shopAssistantId')->unsigned();
            //$table->integer('mechanicId')->unsigned();
            //$table->integer('paymentId')->unsigned();
        });

        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('vehicleid')->references('id')->on('vehicles')->onDelete('cascade');
            //$table->foreign('shopAssistantId')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('mechanicId')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('paymentId')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
