<?php

use Illuminate\Database\Seeder;
use App\Post;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->words(3, true);
            $newPost->author = $faker->name();
            $newPost->content = $faker->words(3, true);
            $newPost->image_url = "https://picsum.photos/id/$i/450/550";
            $newPost->posted = $faker->date();
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
