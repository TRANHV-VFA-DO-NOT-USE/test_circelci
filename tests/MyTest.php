<?php
 
namespace App\Tests;

use PHPUnit\Framework\TestCase;
 
class MyTest extends TestCase
{
    public function testSameNumber()
    {
        $this->assertEquals(1, 1);
    }

    public function testSameString()
    {
        $varStr = 'original';
        $this->assertEquals($varStr, 'original');
    }
}
