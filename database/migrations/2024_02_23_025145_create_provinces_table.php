<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administrative_unit_id')->nullable();
            $table->unsignedBigInteger('administrative_region_id')->nullable();
            $table->string('code', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('full_name_en', 255)->nullable();
            $table->string('code_name')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}