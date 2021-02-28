<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->id();
            $table->string('no_order')->unique();
            $table->string('no_reg')->nullable();
            $table->string('name');
            $table->string('kelas');
            $table->string('jk');
            $table->string('sekolah')->nullable();
            $table->string('telepon');
            $table->string('alamat');
            $table->boolean('aktif');
            $table->boolean('lunas');
            $table->string('status');
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
        Schema::dropIfExists('calons');
    }
}
