<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizeToCalons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calons', function (Blueprint $table) {
            $table->string('jenjang')->after('alamat');
            $table->string('atasan')->after('jenjang');
            $table->string('bawahan')->after('atasan');
            $table->string('ket_atas')->nullable()->after('bawahan');
            $table->string('ket_bawah')->nullable()->after('ket_atas');
            $table->smallInteger('step')->after('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calons', function (Blueprint $table) {
            $table->dropColumn('jenjang');
            $table->dropColumn('atasan');
            $table->dropColumn('bawahan');
            $table->dropColumn('keterangan');
            $table->dropColumn('step');
        });
    }
}
