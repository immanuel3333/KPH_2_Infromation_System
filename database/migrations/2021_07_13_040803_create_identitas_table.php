<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('unit');
            $table->string('kategori');
            $table-> bigInteger('tahun');
            $table->string('provinsi');
            $table->string('nickname');
            $table->string('alias');
            $table->string('organisasi');
            $table->string('jeniskph');
            $table->string('alamat');
            $table->string('aksesibilitas');
            $table->string('email');
            $table-> bigInteger('telepon');
            $table->string('longitude');
            $table->string('latitude');
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
        Schema::dropIfExists('identitas');
    }
}
