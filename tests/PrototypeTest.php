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
    private $prototype;

    protected function setUp(): void
    {
        $this->prototype = new Prototype();
    }

    public function testInstances()
    {
        $clonedFirstPrototype = $this->getPrototype()->getPrototype();
        $this->assertFalse($clonedFirstPrototype === $this->getPrototype());
        $this->assertInstanceOf(Prototype::class, $clonedFirstPrototype);
    }

    public function testCountInstances()
    {
        $this->assertEquals(AbstractPrototype::$count, 1);
        $this->getPrototype()->getPrototype();
        $this->assertEquals(AbstractPrototype::$count, 2);
        $this->getPrototype()->getPrototype();
        $this->assertEquals(AbstractPrototype::$count, 3);
    }

    /**
     * @return AbstractPrototype
     */
    public function getPrototype(): AbstractPrototype
    {
        return $this->prototype;
    }
}
