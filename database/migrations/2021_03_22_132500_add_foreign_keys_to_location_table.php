<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location', function (Blueprint $table) {
            $table->foreign('utilisateur_idUtilisateur', 'idUtilisateur_utilisateur')->references('utilisateurId')->on('utilisateur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contratLld_idContLld', 'idContratLld_contratLld')->references('contLldId')->on('contratlld')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contratLoa_idContLoa', 'idContratLoa_contratLoa')->references('contLoaId')->on('contratloa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('contratLoc_idContLoc', 'idContratLoc_contratLoc')->references('contLocId')->on('contratloc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('vehicule_idVehicule', 'idVehicule_Vehicule')->references('vehiculeId')->on('vehicule')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location', function (Blueprint $table) {
            $table->dropForeign('idUtilisateur_utilisateur');
            $table->dropForeign('idContratLld_contratLld');
            $table->dropForeign('idContratLoa_contratLoa');
            $table->dropForeign('idContratLoc_contratLoc');
            $table->dropForeign('idVehicule_Vehicule');
        });
    }
}
