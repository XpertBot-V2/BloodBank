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
        Schema::create('_patient', function (Blueprint $table) {
            $table->increments('Patient_id');
            //->primary();
            $table->string('Patient_name');
            $tabel->integer('patient_blood_group');
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
        Schema::dropIfExists('_patient');
    }
};
