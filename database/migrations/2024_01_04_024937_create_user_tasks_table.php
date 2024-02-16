<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id')->nullable();
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('progress', ['waiting', 'pending', 'processing', 'confirming', 'finished', 'failed', 'canceled']);
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
        Schema::dropIfExists('user_tasks');
    }
};
