<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTourPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_tour_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('status')->default('pending');
            $table->String('Tourname');
            $table->String('from');
            $table->String('location_id');
            $table->String('TourDuration');
            $table->date('TourDate');
            $table->double('TourBudget');
            $table->string('members');
            $table->string('transport_id');
            $table->string('spot_id');
            $table->integer('join_id')->default('0');
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
        Schema::dropIfExists('add_tour_plans');
    }
}
