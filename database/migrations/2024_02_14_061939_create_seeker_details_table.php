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
        Schema::create('seeker_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_id')->unique();
            $table->foreign('seeker_id')->references('id')->on('users');
            $table->string('qualification');
            $table->string('skill');
            $table->string('experience');
            $table->string('age');
            $table->string('cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seeker_details');
    }
};
