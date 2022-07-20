<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Front-end', 'Back-end', 'Full-stack', 'Dev-ops'];
        foreach ($categories as $elem) {
            $cat = new Category();
            $cat->name = $elem;
            $cat->slug = Str::of($cat->name)->slug('-');


            $cat->save();
        }
    }
}
