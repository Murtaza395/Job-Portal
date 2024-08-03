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
        Schema::create('provider_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('users')
                  ->where('user_type', 'jobProvider')->unique();
            $table->string('name');
            $table->text('about_us');
            $table->string('industry');
            $table->string('sector');
            $table->string('location');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('website')->nullable();
            $table->integer('employee_count');
            $table->enum('company_type', ['startup', 'small_business', 'medium_enterprise', 'large_corporation']);
            $table->year('founded_year');
            $table->integer('current_job_openings');
            $table->integer('selected_employers');
            $table->text('reviews')->nullable();
            $table->text('benefits')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_details');
    }
};
