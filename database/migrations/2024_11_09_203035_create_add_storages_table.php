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
        Schema::create('add_storages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->constrained('add_servers');
            $table->string('box');
            $table->string('type');
            $table->integer('size_gb')->nullable();
            $table->string('vol_id')->nullable();
            $table->string('lun_id')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_storages');
    }
};
