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
        Schema::create('ummats', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');   
            $table->integer('islam')->default(0);
            $table->integer('kristen')->default(0);
            $table->integer('katolik')->default(0);
            $table->integer('hindu')->default(0);
            $table->integer('buddha')->default(0);
            $table->integer('konghucu')->default(0);
            $table->integer('kepercayaan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ummats');
    }
};
