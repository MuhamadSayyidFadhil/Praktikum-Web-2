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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->char('gender', 1); // Mengubah kolom gender menjadi char(1)
            $table->enum('kategori', ['Umum', 'Spesialis', 'Bidan']); // Menambahkan kolom enum
            $table->string('telpon');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};

