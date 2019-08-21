<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    // Feature 下 的 Test 用於測試 API
    // FAILURES! Tests: 3, Assertions: 3, Failures: 1.
    
    public function testBasicTest()
    {
        // 此行會執行去取得該位置，請確保 Route(web.php檔) 有編寫路徑指引
        // $response = $this->get('/');
        // $response->assertStatus(200);
        
        // assert 意旨 確認是否為回傳值為?? assertTrue(condition, 'message')
        $this->assertTrue(true);
    }
}
