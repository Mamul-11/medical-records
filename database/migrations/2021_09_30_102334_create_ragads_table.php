<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRagadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ragads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            //$table->foreignId('user_id')->nullable()->constrained('users');
            //constrained berfungsi sebagai ketika user tidak ada makan secara otomatis kehapus
            $table->string('user1')->nullable();
            $table->string('user2')->nullable();
            $table->string('user3')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('tekanan')->nullable();
            $table->string('bb')->nullable();
            $table->text('keluhan');
            $table->string('diagnosa')->nullable();
            $table->string('jaminan');
            $table->string('terapi')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('ic')->nullable();
            $table->string('rujuk')->nullable();
            $table->string('rs_rujuk')->nullable();
            $table->text('monitoring_rujuk')->nullable();
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
        Schema::dropIfExists('ragads');
    }
}
