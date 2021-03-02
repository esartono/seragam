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
            $table->smallInteger('step')->after('bawahan');
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
            $table->dropColumn('step');
        });
    }
}
