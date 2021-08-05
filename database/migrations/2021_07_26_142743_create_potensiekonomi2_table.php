<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiekonomi2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potensiekonomi2', function (Blueprint $table) {
            $table->id();
            $table->mediumText('kayu');
            $table->mediumText('nonkayu');
            $table->mediumText('jasalingkungan');
            $table->mediumText('bisnis');
            $table->mediumText('donor');
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
        Schema::dropIfExists('potensiekonomi2');
    }
}
