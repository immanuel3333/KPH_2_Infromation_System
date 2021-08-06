<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasalingkungan4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasalingkungan4', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->string('jenis_jasa_lingkungan');
            $table->string('satuan');
            $table->string('keunggulan');
            $table->string('lintang');
            $table->string('bujur');
            $table->string('pengembangan');
            $table->string('tahapan');
            $table->string('periode');
            $table->string('hasil');
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
        Schema::dropIfExists('jasalingkungan4');
    }
}
