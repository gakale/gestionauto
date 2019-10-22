<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imatriculation');
            $table->string('kilometrage');
            $table->date('date');
            $table->string('puissance');
            
            $table->integer('poids');
            
            $table->integer('nbreplace');
            
            $table->string('capacite');
            
            $table->string('etat');
        
            $table->string('marque');
    
            $table->string('modele');
            
            
            $table->string('categorie');
            
            
            $table->string('carburant');
            
            
            $table->string('utilisation');
            
            
            $table->string('carosserie');
            
            
            
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
