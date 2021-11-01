<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pemesanan', function (Blueprint $table) {
            $table->integer('ID_Pemesanan')->autoIncrement();
            $table->integer('ID_Pembeli');
                $table->foreign('ID_Pembeli')->references('ID_Pembeli')->on('Pembeli');
            
            $table->string('Alamat_Kirim', 100);
            $table->integer('Jumlah_Barang');
            $table->decimal('Total_Harga', 10, 0);
            $table->timestamp('Waktu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pemesanan');
    }
}
