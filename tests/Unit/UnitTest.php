<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertEquals(2,1+1);
    }

    /** @test */
    public function check()
    {
    	$this->assertEquals(3,1+1);
    }
}
