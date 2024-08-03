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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('users');
            $table->string('jobTitle');
            $table->string('companyName');
            $table->text('companyDetails');
            $table->text('jobDescription');
            $table->text('jobRequirements');
            $table->string('qualification');
            $table->integer('vaccancies');
            $table->date('applicationDeadline');
            $table->string('employmentType');
            $table->string('location');
            $table->enum('status',['active','inactive','deleted']);
            $table->string('salary');
            // $table->string('jobImage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
