<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nip');
            $table->string('nama');
            $table->string('gender');
            $table->string('tmp_lahir');
            $table->integer('tgl_lahir');
            $table->integer('telpon');
            $table->string('alamat');
            $table->integer('divisi_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
