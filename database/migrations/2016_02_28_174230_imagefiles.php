<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagefiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagefiles', function (Blueprint $table) {
            $table->increments('image_list_id');
            $table->string('image_list_name');
            $table->integer('amount_of_images');
            $table->integer('image_files_group_id');
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
