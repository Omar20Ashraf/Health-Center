<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('section_title');
            $table->string('dr_name');
            $table->string('dr_specialist');
            $table->string('dr_img');
            $table->string('dr_phone');
            $table->string('dr_email');
            $table->string('facebook');
            $table->string('twitter');
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
        Schema::dropIfExists('our_doctors');
    }
}
