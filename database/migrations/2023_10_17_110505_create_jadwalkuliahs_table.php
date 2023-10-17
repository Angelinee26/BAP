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
        Schema::create('jadwalkuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('kodematakuliah', 8);
            $table->char('kodeterm', 8);
            $table->char('kodedosen', 8);
            $table->char('day', 6);
            $table->time('jammulai');
            $table->time('jamselesai');
            $table->char('ruangan', 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliahs');
    }
};
