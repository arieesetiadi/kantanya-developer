<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Experience;
use App\Enums\ExperienceType;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'type' => ExperienceType::Work->value,
                'title' => 'Full-time Web Developer',
                'place' => 'PT Eannovate Creative Technology',
                'role' => 'Backend Developer',
                'start_date' => Carbon::create(2023, 1, 1),
                'end_date' => null,
            ],
            [
                'type' => ExperienceType::Work->value,
                'title' => 'Part-time Freelance',
                'place' => 'Work from Home',
                'role' => 'Fullstack Web Developer',
                'start_date' => Carbon::create(2020, 1, 1),
                'end_date' => null,
            ],
            [
                'type' => ExperienceType::Education->value,
                'title' => 'University',
                'place' => 'ITB STIKOM Bali',
                'role' => 'Enterprise System Major',
                'start_date' => Carbon::create(2018, 11, 1),
                'end_date' => Carbon::create(2022, 11, 1),
            ],
            [
                'type' => ExperienceType::Education->value,
                'title' => 'Vocational School',
                'place' => 'SMK Wira Harapan',
                'role' => 'Computer Engineering & Network Major',
                'start_date' => Carbon::create(2015, 1, 1),
                'end_date' => Carbon::create(2018, 1, 1),
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
