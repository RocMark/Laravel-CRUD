<?php

use App\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    
    public function run()
    {
        foreach (range(1, 52) as $id) {
            // DB 不會自動寫入 timestamp，在 Model 要用 timestamp
            $blog = new Blog;
            $blog->userId = rand(0, 9999);
            $blog->title = Str::random(10);
            $blog->tag = rand(0, 9999);
            $blog->content = Str::random(100);
            $blog->save();
        }
    }
}
