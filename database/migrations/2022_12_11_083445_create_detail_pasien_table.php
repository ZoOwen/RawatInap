<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pasien', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pasien');
            
            $table->bigInteger('id_pasien')->unsigned();
            $table->foreign('id_pasien')->references('id_pasien')->on('pasien')->onDelete('cascade');

            $table->text('keterangan');
            $table->enum('ketentuan_dirawat', ['ya', 'tidak']);
            $table->integer('lama_inap');
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
        Schema::dropIfExists('detail_pasien');
    }
}
