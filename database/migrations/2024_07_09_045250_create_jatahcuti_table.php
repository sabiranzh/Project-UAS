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
        Schema::create('jatahcuti', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('tahun');
            $table->integer('jumlah');
            $table->integer('nip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jatahcuti');
    }
};
