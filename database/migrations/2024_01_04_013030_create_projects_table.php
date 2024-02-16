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
            $table->string('logo', 255)->nullable();
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
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
