<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testExample()
    {
        $pid = 100;

        // 發送 GET API， withHeaders 發送表頭， json 發送 json 檔
        $response = $this->withHeaders(['X-Header' => 'Value',])
            ->json('GET', 'products', [
                'id' => $pid,
            ]);

        // assertExactJson 一定要檢查所有欄位
        // assertJson      可只檢查其中幾項  (較常用)

        $response->assertStatus(200)->assertJson([
            'id' => $pid, 'title' => 'productTitle',
            // 'title' => true // 檢測存在
        ]);

        $response->dumpHeaders(); // 查看丟過來的 Header
        $response->dump(); // 查看丟過來的 Body
    }
}
