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
            'about' => "Saya adalah seorang pengembang web dengan pengalaman 2 tahun dalam pemrograman. Mahir dalam Laravel dan pengembangan backend. Terbukti mampu bekerja baik dalam tim dan menghasilkan kode berkualitas tinggi. Selalu siap menghadapi tantangan dan berkomitmen untuk mengikuti tren teknologi terbaru. Saya mampu melakukan coding, debugging, dan troubleshooting, serta dapat bekerja baik secara mandiri maupun dalam tim.",
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
