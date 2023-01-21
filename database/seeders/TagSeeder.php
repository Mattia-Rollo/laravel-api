<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0;");
        Tag::truncate();
        // $response = Http::get('https://api.github.com/users/Mattia-Rollo/repos');

        // $repos = $response->json();
        // $arrayTag = [];
        // foreach ($repos as $repo) {
        //     $tagsRes = Http::get($repo['languages_url']);
        //     $tags = $tagsRes->json();
        //     foreach ($tags as $tag) {
        //         // dd($tag);
        //         $key = array_search($tag, $tags); //POSSO USARE array_keys($array) per stampare il nome di tutte le chiavi
        //         if (!in_array($key, $arrayTag)) {
        //             $arrayTag[] = $key;
        //         }
        //     }
        //     // $arrayTag[] = ;
        // }

        // dd($arrayTag);


        $tags = ['HTML', 'CSS', 'SCSS', 'javascript', 'PHP', 'Blade', 'Shell', 'vue', 'Laravel', 'MySQL'];
        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($tag);
            $new_tag->save();
        }
        DB::statement("SET foreign_key_checks = 1;");
    }
}