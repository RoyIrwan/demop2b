<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenertibanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penertiban', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('RT', 3);
            $table->string('RW', 3);
            $table->uuid('kelurahan_id');
            $table->string('jenis_bangunan');
            $table->string('jenis_pembangunan');
            $table->string('jenis_pelanggaran');
            $table->string('no_sp');
            $table->date('tgl_sp');
            $table->string('foto_sp');
            $table->string('no_segel');
            $table->date('tgl_segel');
            $table->date('foto_segel');
            $table->string('no_yustisi');
            $table->date('tgl_yustisi');
            $table->string('tenggat_waktu');
            $table->text('keterangan');
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
        Schema::dropIfExists('penertiban');
    }
}
