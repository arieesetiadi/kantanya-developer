<?php

use App\Enums\ExperienceType;
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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->enum('type', array_map(fn(ExperienceType $type) => $type->value, ExperienceType::cases()));
            $table->string('title');
            $table->string('place');
            $table->string('role');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
