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
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ortus');
    }
};

# Pertemuan 5 - Menambahkan Relasi One to Many antara Ortu dan Student
# File Ortu harus ada diatas Student karena ada foreign key di Student yang mengacu ke Ortu. 
# Jika tidak, maka akan terjadi error saat menjalankan migrasi.