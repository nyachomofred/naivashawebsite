<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnthemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthem', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('verse1');
            $table->longtext('verse2');
            $table->longtext('verse3');
            $table->longtext('chorus');
            $table->string('bg_image');
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
        Schema::dropIfExists('anthem');
    }
}
