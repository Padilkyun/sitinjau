<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul'); // Title
            $table->string('perusahaan'); // Company or Organization
            $table->string('jabatan'); // Position
            $table->string('lokasi'); // Location
            $table->unsignedInteger('tahun_mulai'); // Start Year
            $table->unsignedInteger('tahun_berakhir'); // End Year
            $table->text('deskripsi')->nullable(); // Description
            $table->timestamps(); // Created and Updated timestamps
            $table->string('lembaga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
