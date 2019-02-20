<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResaechNameToSingleReserachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('single_reseraches', function (Blueprint $table) 
        {
            $table->string('research_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('single_reseraches', function (Blueprint $table) {
            //
            $table->dropColumn('research_name');
        });
    }
}
