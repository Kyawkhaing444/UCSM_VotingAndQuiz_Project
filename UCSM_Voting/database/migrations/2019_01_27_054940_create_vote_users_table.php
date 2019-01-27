<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default("");
            $table->string('Fresher King')->default("active");
            $table->string('Fresher Queen')->default("active");
            $table->string('The Whole King')->default("active");
            $table->string('The Whole Queen')->default("active");
            $table->string('Boy Stylish')->default("active");
            $table->string('Girl Stylish')->default("active");
            $table->string('Performance')->default("active");
            $table->string('Singer')->default("active");
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
        Schema::dropIfExists('vote_users');
    }
}
