<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement("SET foreign_key_checks = 0;");
        Project::truncate();
        // $response = Http::get('https://api.github.com/users/Mattia-Rollo/repos');

        // $repos = $response->json();

        // return $jsonData;

        // foreach ($repos as $repo) {
        //     $project = new Project();
        //     $project->title = Str::title(str_replace('-', ' ', $repo['name']));
        //     $project->category_id = fake()->numberBetween(1, 2);
        //     $project->user_id = fake()->numberBetween(1, 2);
        //     $project->slug = $project::generateSlug($repo['name']);
        //     $project->content = "<a href='" . $repo['html_url'] . "'>" . $repo['html_url'] . "</a>";
        //     $project->save();

        // }
        DB::statement("SET foreign_key_checks = 1;");
    }
}