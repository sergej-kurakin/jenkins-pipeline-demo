<?php
namespace Tests\SergejKurakin\Foo\Something;

use PHPUnit\Framework\TestCase;
use SergejKurakin\Foo\Something;

class SomethingTestCase extends TestCase
{
    /**
     * @var Something
     */
    protected $something;

    protected function setUp()
    {
        parent::setUp();

        $this->something = new Something();
    }


}
