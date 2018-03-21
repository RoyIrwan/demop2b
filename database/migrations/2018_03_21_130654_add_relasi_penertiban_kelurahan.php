<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelasiPenertibanKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penertiban', function (Blueprint $table) {
            $table->foreign('kelurahan_id')
                ->references('id')
                ->on('kelurahan');
            //$table->primary(['id', 'kelurahan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penertiban', function (Blueprint $table) {
            //
        });
    }
}
