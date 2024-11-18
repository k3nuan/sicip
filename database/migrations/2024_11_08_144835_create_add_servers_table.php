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
        Schema::create('add_servers', function (Blueprint $table) {
            $table->id();


            $table->string('serial');
            $table->string('name');
            $table->string('brand_details');                // brand, model
            $table->string('cpu_details')->nullable();      // brand, model, speed
            $table->string('capacity_details')->nullable(); // ram, storage size, cores
            $table->string('type')->nullable();
            $table->string('raid')->nullable();
            $table->boolean('is_multipath')->nullable()->default(false);
            $table->boolean('is_bond')->nullable()->default(false);
            $table->boolean('is_virtual')->nullable()->default(false);
            $table->string('virtualizer_details')->nullable();
            $table->string('location_details')->nullable(); // place, racknumber, hallname
            $table->string('os_details');       // type, name, version
            $table->string('enviroment')->nullable();
            $table->string('status')->nullable();
            $table->string('notes')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_servers');
    }
};
