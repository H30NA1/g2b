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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('plain_password', 255)->nullable();
            $table->rememberToken();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('sex', ['male', 'female', 'other'])->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('post_code', 255)->nullable();
            $table->string('province_id', 255)->nullable();
            $table->string('district_id', 255)->nullable();
            $table->string('ward_id', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('tel', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('background_image', 255)->nullable();
            $table->text('description')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('user_professionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('working_experiences', 255)->nullable();
            $table->string('specialty', 255)->nullable();
            $table->text('skills')->nullable();
            $table->dateTime('start_working_at')->nullable();
            $table->dateTime('end_working_at')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('role', ['super_admin', 'admin','employee','freelancer'])->nullable();
            $table->enum('status', ['online', 'offline', 'retired', 'blocked'])->nullable();
            $table->boolean('is_blocked')->default(0);
            $table->boolean('noti_email')->default(0);
            $table->boolean('noti_device')->default(0);
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('access_tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('access_token');
            $table->string('encrypt_data')->nullable();
            $table->string('encrypt_information')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->timestamp('last_logged_in')->useCurrent();
            $table->string('user_agent')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('token_expires_at')->nullable();
            $table->string('location', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps(); 
        });

        Schema::create('user_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id')->nullable();
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('progress', ['waiting', 'pending', 'processing', 'confirming', 'finished', 'failed', 'canceled']);
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->json('permission')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('user_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('request_handler_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('destination', 255)->nullable();
            $table->enum('type', ['authorization', 'overtime', 'leave', 'reset-account'])->nullable();
            $table->enum('status', ['approved', 'pending', 'rejected'])->nullable();
            $table->datetime('requested_at')->nullable();
            $table->datetime('approved_at')->nullable();
            $table->datetime('rejected_at')->nullable();
            $table->datetime('reverted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('user_profiles');
        Schema::dropIfExists('user_professionals');
        Schema::dropIfExists('user_settings');
        Schema::dropIfExists('access_tokens');
        Schema::dropIfExists('user_tasks');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('user_requests');
    }
};
