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
        Schema::create('short_lists', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('job_id');
            // $table->foreign('job_id')->references('id')->on('jobs');
            // $table->unsignedBigInteger('seeker_id')->unique();
            // $table->foreign('seeker_id')->references('id')->on('users');
            // $table->unsignedBigInteger('seeker_details');
            // $table->foreign('seeker_details')->references('id')->on('seeker_details');
            $table->integer('job_id');
            $table->integer('seeker_id');
            $table->integer('seeker_details');
            $table->enum('status',['active','inactive','delete']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('short_lists');
    }
};
