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
        Schema::create('config_apps', function (Blueprint $table) {
            $table->id();
            $table->integer('config_env_id');
            $table->string('acronym', 40);
            $table->string('name');
            $table->string('url');
            $table->string('description');
            $table->string('ait_custodian', 20);
            $table->string('ait_name');
            $table->string('func_custodian', 20);
            $table->string('func_name');
            $table->string('func_telf', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_apps');
    }
};
