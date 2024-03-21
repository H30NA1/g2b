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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('hostname', 255)->nullable();
            $table->unsignedSmallInteger('port')->nullable();
            $table->enum('protocol', ['TCP', 'UDP']);
            $table->enum('type', ['Internal', 'External']);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->dateTime('deployment_date')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('billing_cycle', 255)->nullable();
            $table->string('billing_status', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('support_contact', 255)->nullable();
            $table->string('technical_contact', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_credentials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_deployments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('environment', 255)->nullable();
            $table->string('region', 255)->nullable();
            $table->string('service_plan', 255)->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('vendor', 255)->nullable();
            $table->string('version', 255)->nullable();
            $table->string('documentation_link')->nullable();
            $table->string('api_key_token')->nullable();
            $table->string('integration_details')->nullable();
            $table->string('sla')->nullable();
            $table->softDeletes()->nullable();
            $table->timestamps();
        });

        Schema::create('service_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable(); 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('service_servers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('server_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('status', 255)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable(); 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('service_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedInteger('response_time_threshold')->nullable(); // Response time threshold for SLA monitoring
            $table->unsignedInteger('uptime_threshold')->nullable(); // Uptime threshold for SLA monitoring
            $table->dateTime('last_incident_time')->nullable(); // Timestamp of the last incident
            $table->unsignedInteger('incident_count')->default(0); // Number of incidents
            $table->text('notes')->nullable(); // Additional notes or remarks
            $table->softDeletes()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_billings');
        Schema::dropIfExists('service_contacts');
        Schema::dropIfExists('service_credentials');
        Schema::dropIfExists('service_deployments');
        Schema::dropIfExists('service_details');
        Schema::dropIfExists('service_projects');
        Schema::dropIfExists('service_servers');
        Schema::dropIfExists('service_settings');
    }
};
