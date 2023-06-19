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
        //
        Schema::create('weekly_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("waktu_pelaporan");
            $table->text("isi_laporan");
            $table->text("file_laporan");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
