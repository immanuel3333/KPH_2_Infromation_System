<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepalakphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepalakph', function (Blueprint $table) {
            $table->id();
            $table->string('namakph');
            $table->string('gender');
            $table->bigInteger('nip');
            $table->bigInteger('telepon');
            $table->string('email');
            $table->string('pangkat');
            $table->string('ujikompetensi');
            $table->string('diklat');
            $table->string('pendidikan');
            $table->date('tanggalmulai');
            $table->date('tanggalselesai');
            $table->string('gambar');
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
        Schema::dropIfExists('kepalakph');
    }
}
