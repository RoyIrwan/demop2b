<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPenertibanLoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penertiban', function (Blueprint $table) {
            $table->point('lokasi_pt')
                ->nullable(true)
                ->after('tenggat_waktu');

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
            $table->dropColumn('lokasi_pt');
        });
    }
}
