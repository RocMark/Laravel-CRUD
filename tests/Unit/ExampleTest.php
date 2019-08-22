<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    // Function 內必須有做事，否則會出現 OK, but incomplete, skipped, or risky tests! (橘)
    // tests 資料夾下的 Function 利用指令即可全部運行
    
                 // 利用 vendor\bin\phpunit --group test 運行指定 group 的 testFunc
    /**
     * @group test
     * @group fail
     * Tests the api edit form
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
