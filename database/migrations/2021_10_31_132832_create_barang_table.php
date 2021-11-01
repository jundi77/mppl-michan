<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Barang', function (Blueprint $table) {
            $table->string('ID_Barang',10)->primary();
            $table->string('Nama_Barang', 25);
            $table->decimal('Harga_Barang', 10, 0);
            $table->string('Detail_Barang', 225)->nullable();
            $table->string('Warna_Barang', 10);
            $table->string('Ukuran_Barang', 10);
            $table->integer('Inventory');
            $table->string('status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Barang');
    }
}
