<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRajalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rajals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->string('user1')->nullable();
            $table->string('user2')->nullable();
            $table->string('user3')->nullable();
            $table->string('poli_id');
            $table->date('tgl_masuk')->nullable();
            $table->string('tekanan')->nullable();
            $table->string('bb')->nullable();
            $table->string('tb')->nullable();
            $table->string('lp')->nullable();
            $table->text('keluhan')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('jaminan');
            $table->string('terapi')->nullable();
            $table->string('kode')->nullable();
            $table->string('lab')->nullable();
            $table->string('rokok')->nullable();
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
        Schema::dropIfExists('rajals');
    }
}
