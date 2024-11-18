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
        Schema::create('add_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->constrained('add_servers');
            $table->string('ip_address');
            $table->string('type');
            $table->string('user');
            $table->string('password');
            $table->foreignId('app_id')->nullable()->constrained('add_apps');
            $table->foreignId('database_id')->nullable()->constrained('add_databases');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_connections');
    }
};
