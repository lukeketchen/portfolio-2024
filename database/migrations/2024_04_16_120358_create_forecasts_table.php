<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forecasts', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->text('extended_text')->nullable();
            $table->string('short_text')->nullable();
            $table->string('fire_danger')->nullable();
            $table->integer('temp_high')->nullable();
            $table->integer('temp_low')->nullable();
            $table->timestamp('sunrise_time')->nullable();
            $table->timestamp('sunset_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forecasts');
    }
};
