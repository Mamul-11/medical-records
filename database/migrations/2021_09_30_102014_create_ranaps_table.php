<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            // $table->foreignId('user_id');
            $table->string('user1')->nullable();
            $table->string('user2')->nullable();
            $table->string('user3')->nullable();
            $table->text('keluhan');
            $table->string('diagnosa');
            $table->string('terapi')->nullable();
            $table->string('jaminan');
            $table->date('tgl_keluar')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('biaya')->nullable();
            $table->string('ket')->nullable();
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
        Schema::dropIfExists('ranaps');
    }
}
