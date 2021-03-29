<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('utilisateurId', true);
            $table->string('utilisateurNom', 25);
            $table->string('utilisateurPrenom', 25);
            $table->date('utilisateurDateNais');
            $table->boolean('utilisateurType')->default(0);
            $table->string('utilisateurMdp', 255);
            $table->string('utilisateurEmail', 100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
