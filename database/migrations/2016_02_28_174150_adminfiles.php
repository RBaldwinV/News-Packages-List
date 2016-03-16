<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Adminfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminfiles', function (Blueprint $table) {
            $table->increments('admin_list_id');
            $table->string('admin_list_name');
            $table->integer('video_realease_files_group_id');
            $table->integer('audio_realease_files_group_id');
            $table->integer('image_realease_files_group_id');
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
