<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembeli', function (Blueprint $table) {
            $table->integer('ID_Pembeli')->autoIncrement();
            $table->string('Nama_Pembeli', 25);
            $table->string('Alamat_Pembeli', 100);
            $table->string('Email_Pembeli', 20)->nullable();
            $table->string('NoHP_Pembeli', 20);
            $table->string('Password_Pembeli', 60);
            $table->string('PostCode', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pembeli');
    }
}
