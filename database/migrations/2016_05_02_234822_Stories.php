<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('stories_table', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('author');
        $table->string('date');
        $table->boolean('ready');
        $table->string('video_url');
        $table->timestamps();
        });
        
        //
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
