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
        Schema::create('service_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('plain_password', 255)->nullable();
            $table->string('prikey', 255)->nullable();
            $table->string('prikey_passphrase', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_accounts');
    }
};
