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
        Schema::create('cock_pit', function (Blueprint $table) {
            $table->id();
            $table->string('cock_name')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('endurance')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cock_pit');
    }
};
