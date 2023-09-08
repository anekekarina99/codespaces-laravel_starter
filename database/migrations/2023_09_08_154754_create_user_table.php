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
            $table->unsignedBigInteger('client_id_project');
            $table->string('telepon');

            $table->foreign('client_id_project')->references('id')->on('client');
        });
        //Tabel Penawaran Jasa
        Schema::create('penawaran_jasa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('project_id');
            $table->integer('jumlah');

            $table->foreign('work_id')->references('id')->on('client');
            $table->foreign('project_id')->references('id')->on('project');
        });
        //Tabel Tagihan/ Total Payment
        Schema::create('total_payment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('project_id');
            $table->integer('total_tagihan');
            $table->date('tanggal_tagihan');

            $table->foreign('project_id')->references('id')->on('project');
        });
        //Tabel Pembayaran atas Pembelian/activa_order
        Schema::create('activa_order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('tagihan_id');
            $table->integer('jumlah_pembayaraan');
            $table->date('tanggal_pemb');

            $table->foreign('tagihan_id')->references('id')->on('total_payment');
        });
        //Tabel Pesanan pembelian
        Schema::create('pesanan_pembelian', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('client_id');
            $table->date('tanggaL-pesanan');
            $table->string('nomor_pesanan');

            $table->foreign('client_id')->references('id')->on('client');
        });
        //Tabel referensi perushaan
        Schema::create('referensi_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
        });
        //Tabel referensi bahasa
        Schema::create('refernsi_bahasa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kode_bahasa');
            $table->string('nama_bahasa');

        });
        //Tabel Permintaa Jasa
        Schema::create('permintaan_jasa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pelanggan');
            $table->string('jenis_jasa');
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('total_biaya');
            // Anda dapat menambahkan kolom lain sesuai kebutuhan Anda
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
