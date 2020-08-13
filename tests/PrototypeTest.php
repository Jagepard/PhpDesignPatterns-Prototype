<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

use Creational\Prototype\{Prototype, AbstractPrototype};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class PrototypeTest extends PHPUnit_Framework_TestCase
{
    private AbstractPrototype $prototype;

    protected function setUp(): void
    {
        $this->prototype = new Prototype();
    }

    public function testInstances()
    {
        $clonedFirstPrototype = $this->prototype->getPrototype();
        $this->assertFalse($clonedFirstPrototype === $this->prototype);
        $this->assertInstanceOf(Prototype::class, $clonedFirstPrototype);
    }

    public function testCountInstances()
    {
        $this->assertEquals(1, AbstractPrototype::$count);
        $this->prototype->getPrototype();
        $this->assertEquals(2, AbstractPrototype::$count);
        $this->prototype->getPrototype();
        $this->assertEquals(3, AbstractPrototype::$count);
    }
}
