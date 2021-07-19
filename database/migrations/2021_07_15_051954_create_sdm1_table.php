<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdm1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm1', function (Blueprint $table) {
            $table->id();
            $table->integer('kkph');
            $table->integer('kepala_seksi');
            $table->integer('tata_usaha');
            $table->integer('kepala_resort');
            $table->integer('staf_pns');
            $table->integer('staf_honorer');
            $table->integer('tenaga_kontrak');
            $table->integer('tenaga_brigdalkarhutlapns');
            $table->integer('tenaga_brigdalkarhutlanonpns');
            $table->integer('pamhut');
            $table->integer('sdm_pemda');
            $table->integer('bukti_rimbawa_sebelum_2015');
            $table->integer('bakti_rimbawa_2015');
            $table->integer('bakti_rimbawa_2016');
            $table->integer('bakti_rimbawa_2017');
            $table->integer('bakti_rimbawa_2018');
            $table->integer('total_bakti_rimbawan');

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
        Schema::dropIfExists('sdm1');
    }
}
