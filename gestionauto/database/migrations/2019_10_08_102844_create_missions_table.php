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
            $table->string('lieuarrive');
            $table->date('heurdepart');
            $table->date('heurretour')->nullable();
            $table->string('recupaiement');

            $table->integer('chauffers_id')->unsigned();
            $table->foreign('chauffers_id')->references('id')->on('chauffeurs')->onDelete('cascade');

            $table->integer('personnel_id')->unsigned();
            $table->foreign('personnel_id')->references('id')->on('users')->onDelete('cascade');



            $table->integer('voit_id')->unsigned();
            $table->foreign('voit_id')->references('id')->on('vehicules')->onDelete('cascade');

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
