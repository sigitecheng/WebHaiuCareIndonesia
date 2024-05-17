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
        Schema::create('donaturs', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Kolom name sebagai string
            $table->unsignedBigInteger('fundraising_id'); // Kolom fundraising_id
            $table->unsignedBigInteger('total_amount'); // Kolom total_amount sebagai integer
            $table->string('notes'); // Kolom notes sebagai varchar
            $table->boolean('is_paid'); // Kolom is_paid sebagai boolean
            $table->string('proof'); // Kolom proof sebagai varchar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};
