<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('username')->unique(); // Unique username
            $table->string('birth_place'); // Tempat lahir
            $table->foreignId('partai_id')->constrained('partais')->onDelete('cascade'); // Relasi ke tabel partai
            $table->string('origin_area'); // Daerah asal
            $table->integer('age'); // Umur
            $table->string('password'); // Password
            $table->rememberToken(); // Token remember me
            $table->timestamps(); // Timestamps: created_at dan updated_at
            $table->string('poto')->nullable();
            $table->string('dapil')->nullable();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
