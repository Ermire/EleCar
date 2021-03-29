<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->integer('vehiculeId', true);
            $table->string('vehiculeModele', 25);
            $table->integer('vehiculeEtat');
            $table->float('vehiculeKm', 10, 0);
            $table->integer('vehiculeAnnee');
            $table->string('vehiculeDesc', 25);
            $table->float('vehiculePrixLoc', 10, 0);
            $table->integer('typeVehicule_idtypeVehicule')->index('typeVehicule_vehicule');
            $table->integer('marque_idMarque')->index('idMarque_marque');
            $table->integer('classe_idClasse')->index('idClasse_classe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
