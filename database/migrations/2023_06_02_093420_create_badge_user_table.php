<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgeUserTable extends Migration
{
    public function up()
    {
        Schema::create('badge_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('badge_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            // $table->foreign('badge_id')->references('badge_id')->on('badges');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('badge_user');
    }
}

