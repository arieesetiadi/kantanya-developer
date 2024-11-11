<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\ProjectType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->enum('type', array_map(fn(ProjectType $type) => $type->value, ProjectType::cases()));
            $table->string('title_id');
            $table->string('title_en');
            $table->string('headline_id');
            $table->string('headline_en');
            $table->text('description_id');
            $table->text('description_en');
            $table->json('images');
            $table->tinyInteger('sort_order');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
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
