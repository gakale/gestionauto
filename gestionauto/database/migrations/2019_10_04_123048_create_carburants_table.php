<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarburantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carburants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomstation');
            $table->string('designation');
            $table->string('litrage');
            $table->string('montant');
            $table->string('quantite');
            $table->string('avantrecharge');
            $table->string('apresrecharge');
            $table->string('vehicule');
            $table->string('paiement');
            $table->date('date');
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
        Schema::dropIfExists('carburants');
    }
}
