<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Packagetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('packagetable', function (Blueprint $table) {
            $table->increments('package_id');
            $table->string('correspondent_name');
            $table->string('package_title'); 
            $table->boolean('ready_for_broadcast');
            $table->integer('video_files_id');
            $table->integer('audio_files_id');
            $table->integer('image_files_id');
            $table->integer('admin_files_id');
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
