<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schoolCode');
            $table->string('name');
            $table->string('city');
            $table->string('regionalEducationManagement');
            $table->string('dailyJourney');
            $table->string('elementarySchool');
            $table->string('highSchool');
            $table->string('fundationYear');
            $table->string('transitionYear');
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
        Schema::dropIfExists('schools');
    }
}
