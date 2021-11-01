<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administrator', function (Blueprint $table) {
            $table->integer('ID_Admin')->autoIncrement();
            $table->string('Nama_Admin', 50);
            $table->string('Email_Admin', 20);
            $table->string('Password_Admin', 60);
            $table->string('NoHP_Admin', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Administrator');
    }
}
