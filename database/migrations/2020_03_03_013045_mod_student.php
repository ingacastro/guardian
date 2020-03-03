<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		        Schema::table('student', function (Blueprint $table) {
            
			$table->integer('document')->unique()->change();
			$table->string('lastname', 50)->change();
			$table->string('firstname', 50)->change();
			$table->string('email', 50)->change();
			$table->string('homephone', 50)->change();
			$table->string('mobilephone', 50)->change();
            
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
