<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabel User
        Schema::create('users_fix', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
        });
        //Tabel Client
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel Pekerjaan
        Schema::create('work', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_work');
        });

        //Tabel Tipe Pekerjaan
        Schema::create('type_work', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_type');
        });

            //Tabel Project
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('client_id_p');
            $table->string('telepon');

            $table->foreign('client_id')->references('id')->on('client');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel P
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_fix');
    }
};
