<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('code_apogee')->unique()->nullable() ;
            $table->string('cne')->unique()->nullable() ;
            $table->string('cin')->unique()->nullable();
            $table->string('adresse')->nullable();
            $table->string('numero_telephone')->nullable();
            $table->string('email')->nullable();
            $table->date('date_naissance');
            $table->string('lieu_naissance')->nullable() ; 
            $table->string('status')->nullable();
            $table->string('filiere')->nullable();
            $table->string('nom_prenom_mere')->nullable();
            $table->string('nom_prenom_pere')->nullable();
            $table->string('cin_pere')->nullable();
            $table->string('cin_mere')->nullable();
            $table->string('numero_telephone_pere')->nullable();
            $table->string('numero_telephone_mere')->nullable();
            $table->string('ville')->nullable();
            $table->integer('code_postal')->nullable();
            $table->date('date_inscription')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
