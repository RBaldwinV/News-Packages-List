<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('documentstable', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('document_url');
        $table->string('story_id');
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
