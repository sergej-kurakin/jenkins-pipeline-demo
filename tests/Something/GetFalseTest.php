<?php

namespace Tests\SergejKurakin\Foo\Something;

use PHPUnit\Framework\TestCase;

class GetFalseTest extends SomethingTestCase
{

    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        static::assertFalse($this->something->getFalse());
    }
}
