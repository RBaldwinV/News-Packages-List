<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Audiofiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiofiles', function (Blueprint $table) {
            $table->increments('audio_list_id');
            $table->string('audio_list_name');
            $table->string('total_length');
            $table->integer('amount_of_clips');
            $table->integer('audio_clips_group_id');
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
