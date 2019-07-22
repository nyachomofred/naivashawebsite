<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bg_image')->nullable();
            $table->longtext('bg_text')->nullable();
            $table->longtext('brief_intro')->nullable();
            $table->longtext('intro_text')->nullable();
            $table->longtext('school')->nullable();
            $table->longtext('history')->nullable();
            $table->longtext('performance')->nullable();
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
        Schema::dropIfExists('history');
    }
}
