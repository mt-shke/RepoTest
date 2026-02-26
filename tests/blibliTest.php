<?php

namespace Tests;

class blibliTest extends \PHPUnit\Framework\TestCase
{
    public function testCoucou()
    {
        $text = "coucou";
        $this->assertEquals("coucou", $text);
    }
}