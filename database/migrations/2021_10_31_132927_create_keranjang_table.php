<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Keranjang', function (Blueprint $table) {
            $table->integer('ID_Pemesanan');
            $table->string('ID_Barang', 10);
            $table->integer('ID_Pembeli');
                $table->foreign('ID_Barang')->references('ID_Barang')->on('Barang');
                $table->foreign('ID_Pemesanan')->references('ID_Pemesanan')->on('Pemesanan');
                $table->foreign('ID_Pembeli')->references('ID_Pembeli')->on('Pembeli');
                $table->primary(['ID_Pembeli', 'ID_Barang']);

            $table->string('Nama_Barang', 25);
            $table->integer('Jumlah');
            $table->string('Ukuran', 10);
            $table->string('Warna', 10);
            $table->decimal('Harga_Barang', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Keranjang');
    }
}
