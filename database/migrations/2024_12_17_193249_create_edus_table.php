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
        Schema::create('edus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul'); // Title
            $table->unsignedInteger('tahun_mulai'); // Start Year
            $table->unsignedInteger('tahun_berakhir'); // End Year
            $table->string('image');
            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edus');
    }
};
