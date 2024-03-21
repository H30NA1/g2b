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
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('name', 255);
            $table->string('hostname', 255)->nullable();
            $table->string('port', 255)->nullable();
            $table->string('location', 255)->nullable();
            $table->enum('status', ['online', 'offline', 'idle'])->nullable();
            $table->dateTime('purchase_date')->nullable();
            $table->dateTime('warranty_expiry_date')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('server_backups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->boolean('enabled')->default(false);
            $table->string('schedule')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_hardwares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('cpu', 255)->nullable();
            $table->string('memory', 255)->nullable();
            $table->string('storage', 255)->nullable();
            $table->string('manufacturer', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('serial_number', 255)->nullable();
            $table->string('rack_location', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_networks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('network_configuration', 255)->nullable();
            $table->string('power_configuration', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable(); 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_securities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('health_status', 255)->nullable();
            $table->text('notes')->nullable();
            $table->boolean('virtualized')->default(false); // Indicates whether the server is virtualized
            $table->integer('num_processors')->nullable(); // Number of processors
            $table->integer('num_cores_per_processor')->nullable(); // Number of cores per processor
            $table->integer('num_threads_per_core')->nullable(); // Number of threads per core
            $table->string('uptime', 255)->nullable(); // Server uptime
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('server_softwares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('operating_system', 255)->nullable();
            $table->string('bios_version', 255)->nullable();
            $table->string('firmware_version', 255)->nullable();
            $table->string('os_version', 255)->nullable(); 
            $table->string('kernel_version', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
        Schema::dropIfExists('server_backups');
        Schema::dropIfExists('server_hardwares');
        Schema::dropIfExists('server_networks');
        Schema::dropIfExists('server_projects');
        Schema::dropIfExists('server_securities');
        Schema::dropIfExists('server_settings');
        Schema::dropIfExists('server_softwares');
    }
};
