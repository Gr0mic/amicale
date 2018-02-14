<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->comment('created by')->unsigned();
            $table->string('title')->nullable($value = false);
            $table->text('description');
            $table->date('start');
            $table->date('finish');
            $table->date('registration_start');
            $table->date('registration_finish');
            $table->boolean('visible');
            $table->timestamps();
        });
        Schema::table('activities', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
