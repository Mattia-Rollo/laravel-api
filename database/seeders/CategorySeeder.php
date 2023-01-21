<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disabilita il controllo sulla foreign key collegata
        // DB::statement("SET foreign_key_checks = 0;");
        Category::truncate();
        $categories = ['Front-end Developer', 'Back-end Developer', 'Full-stack Developer', 'Database'];
        foreach ($categories as $category) {
            $newcategory = new Category();
            $newcategory->name = $category;
            $newcategory->slug = Str::slug($newcategory->name, '-');
            $newcategory->save();
        }
        // DB::statement("SET foreign_key_checks = 1;");
    }
}