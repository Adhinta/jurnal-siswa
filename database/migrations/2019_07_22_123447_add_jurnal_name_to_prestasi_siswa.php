<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJurnalNameToPrestasiSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestasi_siswa', function (Blueprint $table) {
            $table->string('jurnal_name')->after('jurnal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestasi_siswa', function (Blueprint $table) {
            $table->dropColumn('jurnal_name');
        });
    }
}
