<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default("");
            $table->string('sec_name')->default("");
            $table->string('password')->default("");
            $table->integer('Quiz_id')->default(0);
            $table->integer('point')->default(0);
            $table->string('code')->default("");
            $table->rememberToken();
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
        Schema::dropIfExists('quiz_users');
    }
}
