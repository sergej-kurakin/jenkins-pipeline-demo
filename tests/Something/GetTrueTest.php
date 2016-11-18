<?php

namespace Tests\SergejKurakin\Foo\Something;

use PHPUnit\Framework\TestCase;

class GetTrueTest extends SomethingTestCase
{

    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        static::assertTrue($this->something->getTrue());
    }
}
