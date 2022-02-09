<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')
                  ->constraind('etudiants')
                  ->onDelete('cascade')
                  ->onUpdate('cascade') ;
            $table->binary('recu_preinscription');
            $table->binary('acte_naissance') ; 
            $table->binary('bac');
            $table->binary('copie_cin') ; 
            $table->string('traite')->nullable() ; 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
