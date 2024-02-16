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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('role', ['super_admin', 'admin','accountant','developer','tester', 'freelancer'])->nullable();
            $table->enum('status', ['online', 'offline', 'retired', 'blocked'])->nullable();
            $table->boolean('is_blocked')->default(0);
            $table->boolean('noti_email')->default(0);
            $table->boolean('noti_device')->default(0);
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
