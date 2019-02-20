<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latest_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_headline');
            $table->string('news_image');
            $table->string('news_date');
            $table->string('small_paragraph');            
            $table->string('dr_name');
            $table->string('job_title');
            $table->string('dr_img');
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
        Schema::dropIfExists('latest_news');
    }
}
