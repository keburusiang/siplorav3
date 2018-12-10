<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_laporan');
            $table->string('deskripsi');
            $table->Integer('latitude');
            $table->Integer('longitude');
            $table->string('alamat');
            $table->Integer('status_id')->default('1');
            $table->Integer('user_id');
            // $table->foreign('status_id')->references('id')->on('statuslaporans')->onDelete('CASCADE');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('laporans');
    }
}
