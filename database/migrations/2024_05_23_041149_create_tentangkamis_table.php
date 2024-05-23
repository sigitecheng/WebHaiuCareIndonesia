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
        Schema::create('tentangkamis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->text('deskripsi')->nullable();
            $table->string('berdiri')->nullable();
            $table->string('founder')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_telepon', 20)->nullable();
            $table->string('website')->nullable();
            $table->string('industri')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangkamis');
    }
};
