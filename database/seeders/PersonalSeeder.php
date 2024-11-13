<?php

namespace Database\Seeders;

use App\Enums\UploadPath;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Traits\HasAssetGenerator;
use App\Models\Personal;

class PersonalSeeder extends Seeder
{
    use HasAssetGenerator;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Personal::create([
            'name' => 'Arie Setiadi',
            'headline' => 'Web Developer',
            'about' => "Enthusiastic coder with 3+ years of experience, focusing on building solid fullstack web apps and efficient backend APIs for smooth frontend integration. I excel at using various tools to bring creative ideas to reality and love tackling tough problems with clean, user-friendly code.",
            'resume_path' => $this->createAsset(
                filePath: public_path('/assets/resumes/resume.pdf'),
                uploadPath: UploadPath::ResumeFiles->value
            ),
            'email' => 'ariee.setiadi@gmail.com',
            'phone' => '+6282146335727',
            'instagram_url' => 'https://www.instagram.com/arieesetiadi',
            'github_url' => 'https://github.com/arieesetiadi',
            'linkedin_url' => 'https://www.linkedin.com/in/arieesetiadi',
            'codewars_url' => 'https://www.codewars.com/users/arieesetiadi',
        ]);
    }
}
