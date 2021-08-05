<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLembaga3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembaga3', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('provinsi');
            $table->string('jenislembaga');
            $table->string('kepseksi');
            $table->string('petugaskph');
            $table->bigInteger('teleponpetugas');
            $table->string('emailpetugas');
            $table->string('sklembaga');
            $table->date('tglsklembaga');
            $table->string('doksklembaga');
            $table->string('statblud');
            $table->string('skblud');
            $table->string('dokskblud');
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
        Schema::dropIfExists('lembaga3');
    }
}
