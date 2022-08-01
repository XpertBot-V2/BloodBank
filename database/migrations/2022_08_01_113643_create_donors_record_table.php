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
        Schema::create('_donors__record', function (Blueprint $table) {
            $table->increments('Donation_id');
            //->primary();
            $table->increments('Donor_id');
            $table->string('Address');
            $table->integer('Amount_Donated');
            $table->time('time');
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
        Schema::dropIfExists('_donors__record');
    }
};
