<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('resi');
            $table->string('program');
            $table->string('kegiatan');
            $table->string('sub_kegiatan');
            $table->string('pekerjaan');
            $table->string('pelaksana');
            $table->integer('angsuran');
            $table->bigInteger('nilai_pengajuan');
            $table->string('tahun_anggaran',4);
            $table->datetime('tanggal_pengajuan')->nullable();
            $table->string('status');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('pengajuan');
    }
}
