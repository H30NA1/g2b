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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->longText('description')->nullable();
            $table->enum('priority', ['low', 'medium', 'high', 'urgent']);
            $table->enum('status', ['open', 'progressing', 'testing', 'resolved', 'confirmation', 'pending', 'closed']);
            $table->dateTime('deadline')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
