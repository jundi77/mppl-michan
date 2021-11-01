<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pesanan', function (Blueprint $table) {
            $table->integer('ID_Pemesanan');
            $table->integer('ID_Pembeli');
                $table->foreign('ID_Pemesanan')->references('ID_Pemesanan')->on('Pemesanan');
                $table->foreign('ID_Pembeli')->references('ID_Pembeli')->on('Pembeli');
                $table->primary(['ID_Pemesanan', 'ID_Pembeli']);

            $table->string('PNama', 50);
            $table->string('PEmail', 20);
            $table->string('PAlamat', 100);
            $table->string('PKodePost', 20);
            $table->string('PKota', 20);
            $table->string('PNomorHP', 20);
            $table->string('PMetode', 10);
            $table->decimal('Ongkos', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pesanan');
    }
}
