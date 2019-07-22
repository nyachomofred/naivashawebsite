<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myevents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');  
            $table->string('image')->nullable(); 
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->string('starttime');
            $table->string('endtime');
            $table->longtext('description')->nullable();                       
            $table->longtext('location')->nullable(); 
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
        Schema::dropIfExists('myevents');
    }
}
