<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkologi4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekologi4', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tanah');
            $table->string('jenis_kayu');
            $table->string('fauna_satwa');
            $table->string('kelerengan');
            $table->string('DAS');
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
        Schema::dropIfExists('ekologi4');
    }
}
