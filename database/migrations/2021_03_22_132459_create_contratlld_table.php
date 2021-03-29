<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratlldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratlld', function (Blueprint $table) {
            $table->integer('contLldId', true);
            $table->float('contLldPrixMensuel', 10, 0);
            $table->float('contLldKm', 10, 0);
            $table->date('contLldMaxLoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratlld');
    }
}
