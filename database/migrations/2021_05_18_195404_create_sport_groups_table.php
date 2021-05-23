<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_groups', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->double('cal');
            $table->unsignedBigInteger('sport_id');
            $table->foreign('sport_id')->references('id')->on('sports');
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
        Schema::dropIfExists('sport_groups');
    }
}
