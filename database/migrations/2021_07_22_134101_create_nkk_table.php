<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNkkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nkk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('luas')->nullable();
            $table->integer('jumlah_kk')->nullable();
            $table->string('fungsi_kawasan')->nullable();
            $table->string('jenis_kerjasama')->nullable();
            $table->string('nomor_nkk')->nullable();
            $table->string('nomor_kulin')->nullable();
            $table->integer('jumlah_disadap')->nullable();
            $table->integer('jumlah_dievaluasi')->nullable();
            $table->date('created_at', 0);
            $table->date('updated_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nkk');
    }
}
