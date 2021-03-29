<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratloaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratloa', function (Blueprint $table) {
            $table->integer('contLoaId', true);
            $table->float('contLoaPrixLoc', 10, 0);
            $table->float('contLoaPrixVente', 10, 0);
            $table->date('contLoaMaxLoc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratloa');
    }
}
