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
        Schema::create('add_apps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('server_id')->nullable()->constrained('add_servers');
            $table->string('acronym');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->string('ait_user')->nullable();
            $table->string('ait_name')->nullable();
            $table->string('func_user')->nullable();
            $table->string('func_name')->nullable();
            $table->string('func_telf')->nullable();
            #$table->string('env')->nullable();         # take it from server_id->env
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_apps');
    }
};
