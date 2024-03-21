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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('app_id', 255)->nullable();
            $table->string('platform', 255)->nullable();
            $table->string('environment', 255)->nullable();
            $table->string('url_image', 255)->nullable();
            $table->string('name', 255)->nullable(); 
            $table->string('description', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('app_versions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('version', 255)->nullable();
            $table->string('environment', 255)->nullable();
            $table->string('build_number', 255)->nullable();
            $table->string('upload_number', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('url_image', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('devices', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
        Schema::dropIfExists('app_versions');
    }
};
