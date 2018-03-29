<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\Prototype\Prototype;
use Creational\Prototype\FirstPrototype;


/**
 * Class PrototypeTest
 */
class PrototypeTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $prototype;

    protected function setUp(): void
    {
        $this->prototype = new FirstPrototype();
    }

    public function testInstances()
    {
        $clonedFirstPrototype = $this->getPrototype()->getPrototype();
        $this->assertFalse($clonedFirstPrototype === $this->getPrototype());
        $this->assertInstanceOf(FirstPrototype::class, $clonedFirstPrototype);
    }

    public function testCountInstances()
    {
        $this->assertEquals(Prototype::$count, 1);
        $this->getPrototype()->getPrototype();
        $this->assertEquals(Prototype::$count, 2);
        $this->getPrototype()->getPrototype();
        $this->assertEquals(Prototype::$count, 3);
    }

    /**
     * @return mixed
     */
    public function getPrototype()
    {
        return $this->prototype;
    }
}
