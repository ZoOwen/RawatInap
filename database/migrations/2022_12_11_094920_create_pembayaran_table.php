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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            
            $table->bigInteger('id_detail_pasien')->unsigned();
            $table->foreign('id_detail_pasien')->references('id_detail_pasien')->on('detail_pasien')->onDelete('cascade');

            $table->enum('jenis_tindakan', ['rawat inap', 'periksa']);
            $table->integer('jumlah_p_tindakan');
            $table->integer('jumlah_p_inap');
            $table->integer('total');
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
        Schema::dropIfExists('pembayaran');
    }
}
