<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_blogs', function (Blueprint $table) {
            $table->id();
            $table->String('BlogName');
            $table->String('location_id');
            $table->dateTime('Date');
            $table->String('user_id');
            $table->String('Blogimage');
            $table->String('SecondBlogimage')->nullable();
            $table->String('ThirdBlogimage')->nullable();
            $table->String('Description');
            $table->String('Description2')->nullable();
            $table->String('Description3')->nullable();
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
        Schema::dropIfExists('_blogs');
    }
}
