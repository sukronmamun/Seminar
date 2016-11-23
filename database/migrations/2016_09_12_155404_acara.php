<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Acara extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organisasi_id');
            $table->integer('bidang_id');
            $table->integer('sponsor_id');
            $table->integer('rek_id');
            $table->string('tema');
            $table->string('deskripsi');
            $table->text('pembicara');
            $table->string('biaya');
            $table->string('waktu_pelaksanaan');
            $table->string('batas_pendaftaran');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acara');
    }
}
