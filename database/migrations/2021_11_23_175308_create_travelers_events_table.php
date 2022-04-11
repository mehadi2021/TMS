<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers_events', function (Blueprint $table) {
            $table->id();
            $table->String('event_name');
            $table->String('event_description');
            $table->String('event_destination');
            $table->String('event_duration');
            $table->double('event_Date');
            $table->double('event_deparature_time');
            $table->integer('traveler_amount');
            $table->double('cost');
            $table->String('traveler_name');
            
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
        Schema::dropIfExists('travelers_events');
    }
}
