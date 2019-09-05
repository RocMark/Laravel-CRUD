<?php

namespace Tests\Unit;

use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{

    // 可以重整資料表，避免測試資料不斷累積。注意這會刪除所有資料，不要用在正式環境
    use RefreshDatabase;

    public function testExample()
    {
        // 建立5筆資料 (記得 Import Model)
        factory(Post::class, 5)->create();
        // 取得所有資料
        $posts = Post::all();

        // 判斷產生的資料是否為 5 筆: assertCount 首個變數為想要的值，後方為要檢查的資料
        $this->assertCount(5, $posts);
    }
}
