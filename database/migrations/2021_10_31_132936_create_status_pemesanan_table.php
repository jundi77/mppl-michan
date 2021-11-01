<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Status_Pemesanan', function (Blueprint $table) {
            $table->integer('ID_Pembeli');
            $table->integer('ID_Pemesanan');
            $table->string('NoResi', 5);
                $table->foreign('ID_Pembeli')->references('ID_Pembeli')->on('Pembeli');
                $table->foreign('ID_Pemesanan')->references('ID_Pemesanan')->on('Pemesanan');
                $table->foreign('NoResi')->references('NoResi')->on('Pembayaran');
                $table->primary(['ID_Pembeli', 'ID_Pemesanan', 'NoResi']);

            $table->string('Status', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Status_Pemesanan');
    }
}
