<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_spots', function (Blueprint $table) {
            $table->id();
            $table->String('SpotName');
            $table->integer('user_id');
            $table->String('location_id');
            $table->String('SpotImage');
            $table->String('SpotDetails');
            $table->String('status')->default('pending');
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
        Schema::dropIfExists('_spots');
    }
}
