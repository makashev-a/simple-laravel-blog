<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                'title' => 'Post ' . $i,
                'description' => 'Description of post ' . $i,
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Distinctio iste provident quo rem tenetur? Accusamus autem beatae, consequatur debitis eligendi,
                esse eum eveniet harum ipsa, iure pariatur praesentium quod reprehenderit?<br>' . $i . '</p>',
                'slug' => 'post-' . $i,
                'category_id' => mt_rand(1, 10)
            ]);
        }
    }
}
