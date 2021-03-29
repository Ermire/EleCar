<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->integer('locId', true);
            $table->dateTime('locDateDepart');
            $table->dateTime('locDateRetour');
            $table->string('locAssurance', 50);
            $table->integer('utilisateur_idUtilisateur')->index('idUtilisateur_utilisateur');
            $table->integer('contratLoc_idContLoc')->nullable()->index('idContratLoc_contratLoc');
            $table->integer('contratLoa_idContLoa')->nullable()->index('idContratLoa_contratLoa');
            $table->integer('contratLld_idContLld')->nullable()->index('idContratLld_contratLld');
            $table->integer('vehicule_idVehicule')->index('idVehicule_Vehicule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location');
    }
}
