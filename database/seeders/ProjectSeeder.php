<?php

namespace Database\Seeders;

use App\Enums\ProjectType;
use App\Enums\UploadPath;
use App\Models\Project;
use App\Traits\HasAssetGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    use HasAssetGenerator;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'type' => ProjectType::WebApp->value,
                'title' => 'Damamaya Cyber Monitor',
                'headline' => 'Web-based application developed for internal use in the Denpasar Communication, Informatics, and Statistics Office.',
                'description' => "Damamaya is a web-based application developed for internal use in the Denpasar Communication, Informatics, and Statistics Office. The purpose of this application is to help internal agencies, among others to monitor the Denpasar City resident's complaints, tracking local and national issues, and monitoring the Denpasar City subdomain security.",
                'images' => $this->generateImages([
                    public_path('/assets/images/projects/app-damamaya/login.webp'),
                    public_path('/assets/images/projects/app-damamaya/keamanan-informasi.webp'),
                ]),
            ],
            [
                'type' => ProjectType::WebApp->value,
                'title' => 'Room Scheduling App',
                'headline' => 'Meeting room scheduling application that can organize the entire lending process includes creating, approval, rejection, and schedule validation.',
                'description' => "Dinas Komunikasi, Informatika, dan Statistik Kota Denpasar is one of the agencies government in Denpasar city engaged in technology, information and communication. During this time, the meeting room scheduling process are still using separate documents for each officers so that the documents are not centralized. This probably caused a conflict schedule because the un-centralized documents. So in this research, i built a meeting room scheduling application that can organizing the entire lending process includes create a schedule, schedule approval and rejection, and schedule validation.",
                'images' => $this->generateImages([
                    public_path('/assets/images/projects/app-scheduler/login.webp'),
                    public_path('/assets/images/projects/app-scheduler/dashboard.webp'),
                ]),
            ],
            [
                'type' => ProjectType::WebApp->value,
                'title' => 'Todo App - MEVN Stack',
                'headline' => 'Web-based application to manage todo-lists built with the MEVN Stack, which stands for MongoDB, ExpressJS, VueJS, and NodeJS.',
                'description' => "MyTodo is a web application to manage todo-lists built with the MEVN Stack, which stands for MongoDB, ExpressJS, VueJS, and NodeJS. With the MyTodo application, users can create, modify, and delete todo-lists. They can also tag todo-lists with finished state. This application has clean and user friendly interface which makes it easy for users to stay organized and manage their tasks.",
                'images' => $this->generateImages([
                    public_path('/assets/images/projects/app-my-todo/home.webp'),
                    public_path('/assets/images/projects/app-my-todo/insert.webp'),
                ]),
            ],
            [
                'type' => ProjectType::WebSite->value,
                'title' => 'Virtual Tour Website',
                'headline' => 'Web-based Virtual Tour Application 360 Degree as an introduction to Puri Agung Kerambitan.',
                'description' => "Puri Agung Kerambitan has not yet been visited by many tourists and still wants to survive in line with the development of cultural tourism and continue to provide benefits for society. Along the times is getting faster, virtual tour is one of the digital technology that delivers experience of \"touring\" just by looking at the device screen. Objective of this research is designing and build a Virtual Tour 360 Application Degree as an introduction to Puri Agung Kerambitan.",
                'images' => $this->generateImages([
                    public_path('/assets/images/projects/site-kerambitan/home.webp'),
                    public_path('/assets/images/projects/site-kerambitan/vtour.webp'),
                ]),
            ],
        ];

        foreach ($projects as $i => $project) {
            $project['sort_order'] = $i + 1;
            Project::create($project);
        }
    }

    public function generateImages(array $paths): array
    {
        return collect($paths)
            ->map(function (string $path) {
                return $this->createAsset(
                    filePath: $path,
                    uploadPath: UploadPath::ProjectImages->value
                );
            })
            ->toArray();
    }
}
