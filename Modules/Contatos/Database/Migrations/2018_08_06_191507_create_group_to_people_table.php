<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_to_people', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('people_id');
            $table->foreign('people_id')->references('id')->on('peoples');
            $table->unsignedInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->softDeletes();
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
        Schema::dropIfExists('group_to_people');
    }
}
