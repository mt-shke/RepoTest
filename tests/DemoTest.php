<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testBlabla()
    {
        $this->assertTrue(true);
    }

    public function testBlibli()
    {
        $a = false;
        $this->assertFalse($a);
    }
}