<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Traits\HasAssetGenerator;
use App\Models\Skill;
use App\Enums\UploadPath;

class SkillSeeder extends Seeder
{
    use HasAssetGenerator;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'title' => 'Frontend Development',
                'description' => 'Crafting engaging UI with HTML, CSS, and JavaScript',
                'sort_order' => 1,
                'icon_path' => $this->createAsset(
                    filePath: public_path('/assets/images/icons/service-1.svg'),
                    uploadPath: UploadPath::SkillImages->value
                ),
            ],
            [
                'title' => 'Backend Development',
                'description' => 'Building robust backend systems with Laravel Framework',
                'sort_order' => 2,
                'icon_path' => $this->createAsset(
                    filePath: public_path('/assets/images/icons/service-2.svg'),
                    uploadPath: UploadPath::SkillImages->value
                ),
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
