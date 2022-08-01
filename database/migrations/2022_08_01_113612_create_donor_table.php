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
        Schema::create('_donors', function (Blueprint $table) {
            $table->increments('Donor_id');
            //->primary();
            $table->string('Donor_name');
            $table->string('email');
            $table->mediumText('Donor_disease');
            $table->string('Address');
            $table->string('phone');
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
        Schema::dropIfExists('_donors');
    }
};
