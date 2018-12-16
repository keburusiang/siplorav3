<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',50);
            $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->string('email')->unique();
            $table->string('bio')->nullable();
            $table->string('alamat')->nullable();
            $table->Integer('role_id')->default('1');
            $table->date('tanggalLahir');
            $table->bigInteger('notelp');
            // $table->foreign('role_id')
            //         ->references('id')->on('roles');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
