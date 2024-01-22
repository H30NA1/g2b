<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
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
    }

    public function down()
    {
        Schema::dropIfExists('access_tokens');
    }
};
