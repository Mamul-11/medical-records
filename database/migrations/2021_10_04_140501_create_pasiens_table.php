<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('no_rm')->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->string('faskes')->nullable();
            $table->string('no_kis')->unique()->nullable();
            $table->string('status_kis')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('kk')->nullable();
            $table->string('telp')->nullable();
            $table->string('penyakit_sendiri')->nullable();
            $table->string('penyakit_keluarga')->nullable();
            $table->string('alergi')->nullable();
            $table->text('pengobatan')->nullable();
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
        Schema::dropIfExists('pasiens');
    }
}
