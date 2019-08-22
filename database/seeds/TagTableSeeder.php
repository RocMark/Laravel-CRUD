<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 52) as $id) {
            $tag = new Tag;
            $tag->name = Str::random(5);
            $tag->save();
        }
    }
}
