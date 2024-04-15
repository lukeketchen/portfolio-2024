<?php

use App\Enums\ProjectStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->string('description');
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('technologies')->nullable();
            $table->string('duration')->nullable();
            $table->string('type')->default('personal');
            $table->string('category')->default('web');
            $table->string('platform')->default('web');
            $table->string('framework')->nullable();
            $table->enum('status', ProjectStatus::getValues())->default(ProjectStatus::Draft);
            $table->date('start_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
