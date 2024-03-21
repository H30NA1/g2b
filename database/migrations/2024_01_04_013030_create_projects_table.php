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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->enum('status', ['in_progress','pending','completed']);
            $table->enum('priority', ['low','medium','high']);
            $table->enum('visibility', ['public','private']);
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->dateTime('deadline_at')->nullable();
            $table->dateTime('began_at')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('project_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('permission', ['read', 'write', 'create', 'admin']);
            $table->timestamps();
            $table->softDeletes()->nullable();
        });

        Schema::create('project_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('client')->nullable();
            $table->string('cost')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('project_users');
        Schema::dropIfExists('project_information');
    }
};
