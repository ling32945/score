<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('students', function (Blueprint $table) {
	    $table->increments('id');
	    $table->string('SID', 12);
	    $table->string('name', 255);
        $table->string('email', 45);
        $table->string('mobile', 15);
	    $table->string('grade', 12);
	    $table->string('class', 12);
        $table->boolean('status', 45);

        $table->unique('SID');
        $table->index('SID');
	});
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
	Schema::drop('students');
    }
}
