<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('chauffeurs');
            $table->integer('montantdepart');
            $table->integer('montantreste')->nullable();
            $table->date('montanttotal');
            $table->string('missionlieu');
            $table->integer('motif');
            $table->date('date');
            $table->string('lieudepart');
            $table->string('lieuarrive')->nullable();
            $table->date('heurdepart');
            $table->date('heurretour')->nullable();
            $table->string('recupaiement');
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
        Schema::dropIfExists('missions');
    }
}
