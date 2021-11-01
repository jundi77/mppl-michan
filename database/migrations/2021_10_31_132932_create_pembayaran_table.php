<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembayaran', function (Blueprint $table) {
            $table->string('NoResi', 5)->primary();

            $table->integer('ID_Admin');
            $table->integer('ID_Pemesanan');
                $table->foreign('ID_Admin')->references('ID_Admin')->on('Administrator');
                $table->foreign('ID_Pemesanan')->references('ID_Pemesanan')->on('Pemesanan');

            $table->decimal('Nominal', 10, 0);
            $table->string('Status_Pembayaran', 100);
            $table->string('Metode', 100);
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
        Schema::dropIfExists('Pembayaran');
    }
}
