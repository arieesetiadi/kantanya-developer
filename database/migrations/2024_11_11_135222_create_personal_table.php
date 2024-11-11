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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('headline');
            $table->text('about_id');
            $table->text('about_en');
            $table->string('resume_path_id');
            $table->string('resume_path_en');
            $table->string('email');
            $table->string('phone');
            $table->string('instagram_url');
            $table->string('github_url');
            $table->string('linkedin_url');
            $table->string('codewars_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
