<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikan4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan4', function (Blueprint $table) {
            $table->id();
            $table->integer('dibawah_sma');
            $table->integer('sma');
            $table->integer('d3');
            $table->integer('s1');
            $table->integer('s2');
            $table->integer('s3');
            $table->integer('total');
            $table->integer('management');
            $table->integer('teknis');
            $table->integer('lainnya');
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
        Schema::dropIfExists('pendidikan4');
    }
}
