<?php

use PHPUnit\Framework\TestCase;

class ExoTest extends TestCase{

    public function test_demo()
    {
        $a = 10 - 5 ;
        $this->assertSame($a, 5);
    }

}