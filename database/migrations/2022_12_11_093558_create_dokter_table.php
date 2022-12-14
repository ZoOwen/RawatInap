<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id_dokter');
            $table->string('nama_dokter',50);

            $table->bigInteger('id_spesialis')->unsigned();
            $table->foreign('id_spesialis')->references('id_spesialis')->on('spesialis')->onDelete('cascade');
            
            $table->string('jam_praktek',20);
            $table->enum('jenis_kelamin_d', ['laki-laki', 'perempuan']);
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
        Schema::dropIfExists('dokter');
    }
}
