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
        Schema::create('server_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->enum('status', ['open', 'progressing', 'resolved', 'confirmation', 'pending', 'closed'])->nullable();
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
        Schema::dropIfExists('server_projects');
    }
};
