<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicule', function (Blueprint $table) {
            $table->foreign('classe_idClasse', 'idClasse_classe')->references('classeId')->on('classe')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('marque_idMarque', 'idMarque_marque')->references('marqueId')->on('marque')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('typeVehicule_idtypeVehicule', 'typeVehicule_vehicule')->references('idtypeVehicule')->on('typevehicule')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicule', function (Blueprint $table) {
            $table->dropForeign('idClasse_classe');
            $table->dropForeign('idMarque_marque');
            $table->dropForeign('typeVehicule_vehicule');
        });
    }
}
