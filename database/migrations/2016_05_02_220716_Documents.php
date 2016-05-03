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
      
        Schema::create('documents_table', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('document_url');
        $table->integer('stories_table_id');
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
