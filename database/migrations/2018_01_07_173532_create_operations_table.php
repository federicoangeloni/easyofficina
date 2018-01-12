<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('unitprice')->nullable();
            $table->string('unit')->nullable();
            $table->string('totalprice')->nullable();
            $table->integer('jobid')->unsigned();
            $table->integer('quantity');
        });

        Schema::table('operations', function (Blueprint $table) {
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::dropIfExists('operations');
    }
}
