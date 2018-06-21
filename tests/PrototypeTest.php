<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

use Creational\Prototype\Prototype;
use Creational\Prototype\AbstractPrototype;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class PrototypeTest
 */
class PrototypeTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var AbstractPrototype
     */
    protected $prototype;

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
