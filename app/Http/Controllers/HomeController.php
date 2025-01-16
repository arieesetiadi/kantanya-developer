<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Personal;
use App\Models\Experience;
use App\Enums\ExperienceType;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $personal = Personal::first();

        $skills = Skill::published()
            ->take(2)
            ->get();

        $experiences = [
            ExperienceType::Work->value => Experience
                ::published()
                ->work()
                ->latest('start_date')
                ->latest('end_date')
                ->get(),
            ExperienceType::Education->value => Experience
                ::published()
                ->education()
                ->latest('start_date')
                ->latest('end_date')
                ->get(),
        ];

        $projects = Project
            ::published()
            // ->take(4)
            ->orderBy('sort_order')
            ->get();

        return view('index', [
            'personal' => $personal,
            'skills' => $skills,
            'experiences' => $experiences,
            'projects' => $projects,
        ]);
    }
}
