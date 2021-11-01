<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Laporan_Penjualan', function (Blueprint $table) {
            $table->integer('ID_Laporan')->autoIncrement();

            $table->integer('ID_Admin');
            $table->integer('ID_Pemesanan');
                $table->foreign('ID_Admin')->references('ID_Admin')->on('Administrator');
                $table->foreign('ID_Pemesanan')->references('ID_Pemesanan')->on('Pemesanan');

            $table->timestamp('Waktu');
            $table->decimal('Penjualan', 10, 0);
            $table->decimal('Total_Penjualan', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Laporan_Penjualan');
    }
}
