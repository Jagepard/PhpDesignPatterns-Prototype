<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

use Creational\Prototype\{Prototype, AbstractPrototype};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class PrototypeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractPrototype
     */
    private $prototype;

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
        $this->assertEquals(AbstractPrototype::$count, 1);
        $this->prototype->getPrototype();
        $this->assertEquals(AbstractPrototype::$count, 2);
        $this->prototype->getPrototype();
        $this->assertEquals(AbstractPrototype::$count, 3);
    }
}
