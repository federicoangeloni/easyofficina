<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->string('partid');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->float('unitprice')->nullable();
           });

        DB::table('catalog')->insert([
                ['partid' => 'A129A452DE',
                'name' => 'Cambio Fiat Stilo 1.9 JTD completo',
                'description' => 'Cambio per Fiat Stilo <2002',
                'unitprice' => '199.99'],

                ['partid' => 'A129B234RE',
                'name' => 'Ammortizzatore posteriore Fiat Stilo 1.9 JTD completo',
                'description' => 'Ammortizzatore posteriore per Fiat Stilo <2002',
                'unitprice' => '59.99']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
}
