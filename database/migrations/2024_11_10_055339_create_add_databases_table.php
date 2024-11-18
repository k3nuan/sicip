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
        Schema::create('add_databases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->nullable()->constrained('add_servers');
            $table->foreignId('app_id')->constrained('add_apps');
            $table->string('management_details');
            $table->string('instance_name');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            #$table->string('ip_address');
            #$table->string('user');
            #$table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_databases');
    }
};
