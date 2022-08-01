<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->integer('weight');
            $table->string('group');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('is_donor')->default('1');
            $table->tinyInteger('is_admin')->default('0');
            $table->timestamp('last_donated')->nullable();
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
        Schema::dropIfExists('users');
    }
};
