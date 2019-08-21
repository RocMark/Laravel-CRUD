<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    // Function 內必須有做事，否則會出現 OK, but incomplete, skipped, or risky tests! (橘)
    // 這裡寫 Function 即會運行
    
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
