<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $projects = [
            [
                "name_project" => "html-css-animation-filter",
                "date_creation" => "08-09-2023",
            ],
            [
                "name_project" => "html-css-boolando",
                "date_creation" => "06-09-2023",
            ],
            [
                "name_project" => "html-css-booleaner",
                "date_creation" => "28-08-2023",
            ],
            [
                "name_project" => "html-css-bootstrap-dashboard",
                "date_creation" => "27-09-2023",
            ],
            [
                "name_project" => "html-css-bootstrap-freelancer",
                "date_creation" => "25-09-2023",
            ],
        ];

        foreach ($projects as $project) {
            $new_project = new Project();

            $new_project->name_project = $project['name_project'];
            $new_project->date_creation = $project['date_creation'];

            $new_project->save();
        }
    }
}
