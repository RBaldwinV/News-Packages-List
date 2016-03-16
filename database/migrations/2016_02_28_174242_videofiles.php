<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Videofiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videofiles', function (Blueprint $table) {
            $table->increments('video_list_id');
            $table->string('video_list_name');
            $table->string('total_length');
            $table->integer('amount_of_clips');
            $table->integer('video_clips_group_id');
            $table->string('observations');
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
        //
    }
}
