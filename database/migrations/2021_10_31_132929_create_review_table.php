<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Review', function (Blueprint $table) {
            $table->integer('ID_Review')->autoIncrement();
            $table->string('ID_Barang', 10);
            $table->integer('ID_Pembeli');
                $table->foreign('ID_Barang')->references('ID_Barang')->on('Barang');
                $table->foreign('ID_Pembeli')->references('ID_Pembeli')->on('Pembeli');
            
            $table->integer('Rate');
            $table->string('Isi_Ulasan', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Review');
    }
}
