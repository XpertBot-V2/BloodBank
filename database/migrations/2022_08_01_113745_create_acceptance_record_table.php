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
        Schema::create('_acceptance__record', function (Blueprint $table) {
            $table->integer('Patient_id')->unsigned();
            
            //->references('id')->on('users')->onDelete('cascade');

            //$table->increments('Donor_id');//

            //->references('id')->on('users')->onDelete('cascade');
            $tabel->integer('Amount_Accpeted');
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
        Schema::dropIfExists('_acceptance__record');
    }
};
