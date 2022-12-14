<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat', function (Blueprint $table) {
            $table->bigIncrements('id_rawat');

            $table->bigInteger('id_detail_pasien')->unsigned();
            $table->foreign('id_detail_pasien')->references('id_detail_pasien')->on('detail_pasien')->onDelete('cascade');

            $table->bigInteger('id_dokter')->unsigned();
            $table->foreign('id_dokter')->references('id_dokter')->on('dokter')->onDelete('cascade');
            
            $table->bigInteger('id_kamar')->unsigned();
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar')->onDelete('cascade');

            $table->date('tanggal_inap');
            $table->date('tanggal_inap_selesai');
            $table->date('tanggal');
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
        Schema::dropIfExists('rawat');
    }
}
