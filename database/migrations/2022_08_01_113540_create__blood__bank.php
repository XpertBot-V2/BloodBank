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
        Schema::create('_blood__bank', function (Blueprint $table) {
            $table->string('Blood_Bank_name');
            //->primary();
            $table->increments('Donor_id');
            //->references('id')->on('users')->onDelete('cascade');
            $table->string('Address');
            $table->string('phone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_blood__bank');
    }
};
