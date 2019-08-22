<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(BlogTableSeeder::class);
        $this->call(TagTableSeeder::class);
    }
}
