<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama_kegiatan");
            $table->string("bentuk_kegiatan");
            $table->string("penyelenggara");
            $table->string("kredit");
            $table->string("kedudukan_penyelenggara");
            $table->string("deskripsi_umum");
            $table->string("rekognisi");
            $table->date("batas_akhir_pendaftaran");
            $table->date("periode_pelaksanaan");
            $table->string("model_pelaksanaan");
            $table->string("metode_pelaksanaan");
            $table->string("persyaratan");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
};
