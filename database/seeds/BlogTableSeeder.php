<?php

use App\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{

    public function run()
    {
        // TODO seed 會用 factory
        foreach (range(1,52) as $id){

            //筆記待整理
//             DB 不會自動寫入 timestamp
//             在 Model 要用 timestamp
//             DB::table('blogs')->insert([
//                 查一下 隨機數字怎產生
//                'userId' => rand(0,9999),
//                'title' => Str::random(10),
//                'tag' => rand(0,9999),
//                'content' => Str::random(100),
//            ]);
            $blog = new Blog;
            $blog->userId = rand(0,9999);
            $blog->title = Str::random(10);
            $blog->tag = rand(0,9999);
            $blog->content = Str::random(100);
            $blog->save();
        }
    }
}
