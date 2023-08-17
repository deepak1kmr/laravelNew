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
        Schema::create('live_url', function (Blueprint $table) {
            $table->id();
            $table->string('live_url')->nullable();
            $table->timestamps();
        });

        DB::table('live_url')->insert(
            array(
                'live_url' => ''   
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_live_url');
    }
};
