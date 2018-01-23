<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spareparts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('catalogid');
            $table->integer('warehouseid')->unsigned();
            $table->integer('quantity');
        });

        DB::table('spareparts')->insert([
            ['catalogid' => 'A129A452DE',
            'warehouseid' => '1',
            'quantity' => '22'],

            ['catalogid' => 'A129B234RE',
            'warehouseid' => '1',
            'quantity' => '214']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spareparts');
    }
}
