<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chauffeur');

            $table->string('montantpodepart');
            $table->string('montantreste')->nullable();
            $table->integer('montanttotal');

            $table->string('lieucourse');
            $table->string('motifcourse');

            $table->date('date');
            $table->date('heurdepart');

            $table->string('heurretour')->nullable();

            $table->string('vehicule');


            $table->string('cabuavantdepart');

            $table->string('cabuapresdepart')->nullable();

            $table->string('kiloavantdepart');

            $table->string('kiloapresdepart')->nullable();

            $table->string('niveau')->nullable();







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
        Schema::dropIfExists('courses');
    }
}
