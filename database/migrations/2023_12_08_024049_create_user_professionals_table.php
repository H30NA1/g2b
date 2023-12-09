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
        Schema::create('user_professionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('working_experiences', 255)->nullable();
            $table->string('job_title', 255)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('company_logo', 255)->nullable();
            $table->string('company_tax_number', 255)->nullable();
            $table->string('company_url', 255)->nullable();
            $table->string('company_address', 255)->nullable();
            $table->string('company_tel', 255)->nullable();
            $table->dateTime('start_working_at')->nullable();
            $table->dateTime('end_working_at')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_professionals');
    }
};
